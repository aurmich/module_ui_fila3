<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * Restituisce la struttura completa delle icone disponibili per la UI.
     *
     * @param string $context
     * @return array<string, array<string, mixed>>
     */
    public function execute(string $context = 'form'): array
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $iconsFactory->all();

        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
                    // Ignora file che non sono SVG
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

                    $iconName = str($file->getPathname())
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $icons[] = $set['prefix'].'-'.$iconName;
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}

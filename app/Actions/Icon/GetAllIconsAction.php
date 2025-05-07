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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4eb3395 (.)
     * @return array
     */
    public function execute(string $context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $iconsFactory->all();
        /*
         *  "heroicons" => array:5 [▼
         *   "prefix" => "heroicon"
         *   "fallback" => ""
         *   "class" => ""
         *   "attributes" => []
         *   "paths" => array:1 [▼
         *      0 => "F:\var\www\_bases\base_broker_fila3\laravel\vendor\blade-ui-kit\blade-heroicons\src/../resources/svg"
         *   ]
        ]
         */
<<<<<<< HEAD
=======
=======
     * Restituisce la struttura completa delle icone disponibili per la UI.
     *
     * @param string $context
     * @return array<string, array<string, mixed>>
     */
    public function execute(string $context = 'form'): array
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $iconsFactory->all();

>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
<<<<<<< HEAD
                    // Simply ignore files that aren't SVGs
=======
<<<<<<< HEAD
                    // Simply ignore files that aren't SVGs
=======
                    // Ignora file che non sono SVG
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

<<<<<<< HEAD
                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
=======
<<<<<<< HEAD
                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
=======
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
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

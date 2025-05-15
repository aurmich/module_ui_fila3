<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

<<<<<<< HEAD
use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

=======
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per recuperare tutte le icone disponibili nel sistema.
 *
 * Recupera e organizza le icone SVG dai percorsi configurati.
 */
>>>>>>> 5512b9a (.)
class GetAllIconsAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
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
        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
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
=======
     * Esegue l'action per recuperare tutte le icone.
     *
     * @return array<string, array<string>>
     */
    public function execute(): array
    {
        $config = config('ui.icons');

        if (!is_array($config)) {
            return [];
        }

        $paths = $config['paths'] ?? [];

        if (!is_array($paths)) {
            return [];
        }

        $icons = Arr::map($paths, function (string $path): array {
            return $this->getIconsFromPath($path);
>>>>>>> 5512b9a (.)
        });

        return $icons;
    }
<<<<<<< HEAD
=======

    /**
     * Recupera le icone da un percorso specifico.
     *
     * @param string $path
     * @return array<string>
     */
    protected function getIconsFromPath(string $path): array
    {
        if (!File::isDirectory($path)) {
            return [];
        }

        $files = File::allFiles($path);
        $icons = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();

            // Considera solo i file SVG
            if (pathinfo($filename, PATHINFO_EXTENSION) !== 'svg') {
                continue;
            }

            $name = pathinfo($filename, PATHINFO_FILENAME);
            $icons[] = $name;
        }

        return $icons;
    }
>>>>>>> 5512b9a (.)
}

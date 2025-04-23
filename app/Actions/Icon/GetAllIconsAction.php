<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per recuperare tutte le icone disponibili nel sistema.
 *
 * Recupera e organizza le icone SVG dai percorsi configurati.
 */
class GetAllIconsAction
{
    use QueueableAction;

    /**
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
        });

        return $icons;
    }

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
}

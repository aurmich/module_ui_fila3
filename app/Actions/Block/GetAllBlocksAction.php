<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\GetClassNameByPathAction;
use Modules\Xot\Datas\ComponentFileData;

use function Safe\realpath;

use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetAllBlocksAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
=======
     * Execute the action to get all blocks.
     *
     * @param string $context The context for the blocks
>>>>>>> 8a76661 (.)
     * @return DataCollection<ComponentFileData>
     */
    public function execute(string $context = 'form'): DataCollection
    {
        Assert::string($relativePath = config('modules.paths.generator.model.path'));

        $files = File::glob(base_path('Modules').'/*/'.$relativePath.'/../Filament/Blocks/*.php');

        $blocks = Arr::map(
            $files,
<<<<<<< HEAD
            function (string $path) {
                $path = realpath($path);
                $class = app(GetClassNameByPathAction::class)->execute($path);

=======
            function (string $path): array {
                $path = realpath($path);
                $class = app(GetClassNameByPathAction::class)->execute($path);

                /** @var string $name */
>>>>>>> 8a76661 (.)
                $name = Str::of(class_basename($class))->snake()->toString();
                if (Str::endsWith($name, '_block')) {
                    $name = Str::before($name, '_block');
                }

<<<<<<< HEAD
                $module = Str::of($class)
                    ->between('Modules\\', '\Filament\\')
=======
                /** @var string $module */
                $module = Str::of($class)
                    ->between('Modules\\', '\\Filament\\')
>>>>>>> 8a76661 (.)
                    ->toString();

                return [
                    'name' => $name,
                    'class' => $class,
                    'module' => $module,
                    'path' => $path,
                ];
            }
        );

        return ComponentFileData::collection($blocks);
    }
}

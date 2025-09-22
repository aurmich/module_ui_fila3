<?php

declare(strict_types=1);

namespace Modules\UI\Services;

class UIService
{
<<<<<<< HEAD
    public static function asset(string $asset): null|string
=======
    public static function asset(string $asset): ?string
>>>>>>> d3fc412d (.)
    {
        return app(\Modules\Xot\Actions\File\AssetAction::class)->execute($asset);
    }
}

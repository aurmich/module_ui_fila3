<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;

class GroupWidget extends XotBaseWidget
{
    public array $widgets = [];

    protected static ?string $pollingInterval = null;

<<<<<<< HEAD
<<<<<<< HEAD
    public function getFormSchema(): array
    {
        return [];
    }
=======
    public function getFormSchema() :array {
        return [];
    }

>>>>>>> 60908d2 (.)
=======
    public function getFormSchema() :array {
        return [];
    }

>>>>>>> 90e8530 (.)
}

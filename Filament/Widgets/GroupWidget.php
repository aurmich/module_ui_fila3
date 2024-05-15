<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as BaseWidget;
use Modules\Quaeris\Filament\Widgets\StatsOverviewWidget;

class GroupWidget extends BaseWidget
{
    use InteractsWithPageFilters;

    protected static string $view = 'ui::filament.widgets.group';

    public array $widgets = [];
    public string $title = '';

    public function getViewData(): array
    {
        return [
            'test' => StatsOverviewWidget::make(),
        ];
    }
}
<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
{
    // use InteractsWithPageFilters;

    // protected static ?int $sort = 0;

    public string $title = 'no-set';

    public string $icon = '';

<<<<<<< HEAD
    protected static null|string $pollingInterval = null;
=======
    protected static ?string $pollingInterval = null;
>>>>>>> d3fc412d (.)

    public function getColumns(): int
    {
        return 8;
    }

    protected function getStats(): array
    {
        return [
<<<<<<< HEAD
            Stat::make('', $this->title)->icon($this->icon),
=======
            Stat::make('', $this->title)
                ->icon($this->icon),
>>>>>>> d3fc412d (.)
        ];
    }
}

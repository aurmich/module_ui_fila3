<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Session;
>>>>>>> 60908d2 (.)
use Modules\UI\Enums\TableLayout;
use Modules\UI\Traits\TableLayoutTrait;

class TableLayoutToggleTableAction extends Action
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $current = $this->getCurrentLayout();

        $this
            ->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn ($livewire) => $this->toggleLayout($livewire));
    }

    /**
<<<<<<< HEAD
     * @param  \Filament\Resources\Pages\ListRecords|null  $livewire
=======
     * @param \Filament\Resources\Pages\ListRecords|null $livewire
>>>>>>> 60908d2 (.)
     */
    protected function toggleLayout($livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->dispatch('$refresh');
        }
    }

    protected function getCurrentLayout(): TableLayout
    {
        return $this->getTableLayout();
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}

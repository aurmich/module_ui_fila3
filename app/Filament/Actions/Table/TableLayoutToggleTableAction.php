<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\UI\Filament\Actions\Table;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayout;
use Modules\UI\Traits\TableLayoutTrait;

class TableLayoutToggleTableAction extends Action
{
    use TableLayoutTrait;

=======
namespace Modules\UI\app\Filament\Actions\Table;

use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
use Livewire\Component;

interface HasTableLayout
{
    public function getLayoutView(): TableLayoutEnum;
    public function setLayoutView(TableLayoutEnum $layout): void;
    public function resetTable(): void;
}

class TableLayoutToggleTableAction extends Action
{
>>>>>>> 5512b9a (.)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $current = $this->getCurrentLayout();

        $this
            ->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn ($livewire) => $this->toggleLayout($livewire));
    }

    /**
     * @param \Filament\Resources\Pages\ListRecords|null $livewire
     */
    protected function toggleLayout($livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();
        
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
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
=======
        $this
            ->name('layout')
            ->label('Cambia Layout')
            ->icon('heroicon-o-view-columns')
            ->action(fn (Component&HasTableLayout $livewire) => $this->toggleLayout($livewire));
    }

    protected function toggleLayout(Component&HasTableLayout $livewire): void
    {
        $currentLayout = $livewire->getLayoutView();
        $newLayout = $currentLayout === TableLayoutEnum::GRID ? TableLayoutEnum::LIST : TableLayoutEnum::GRID;

        $livewire->setLayoutView($newLayout);
        $livewire->dispatch('$refresh');
        $livewire->dispatch('refreshTable');
        $livewire->resetTable();
    }

    public static function make(?string $name = null): static
    {
        return parent::make($name ?? 'layout');
    }
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
}

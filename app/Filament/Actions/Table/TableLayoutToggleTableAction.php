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
<<<<<<< HEAD
namespace Modules\UI\Filament\Actions\Table;
=======
namespace Modules\UI\app\Filament\Actions\Table;
>>>>>>> origin/dev

use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
use Livewire\Component;
<<<<<<< HEAD
use Filament\Resources\Pages\ListRecords;

/**
 * Interface HasTableLayout
 * Interfaccia per componenti che supportano il cambio di layout della tabella
 */
=======

>>>>>>> origin/dev
interface HasTableLayout
{
    public function getLayoutView(): TableLayoutEnum;
    public function setLayoutView(TableLayoutEnum $layout): void;
    public function resetTable(): void;
}

<<<<<<< HEAD
/**
 * Class TableLayoutToggleTableAction
 * Azione per il toggle del layout delle tabelle tra griglia e lista
 */
=======
>>>>>>> origin/dev
class TableLayoutToggleTableAction extends Action
{
>>>>>>> 4eb3395 (.)
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
=======
        $this
            ->name('layout')
            ->label('Cambia Layout')
            ->icon('heroicon-o-view-columns')
<<<<<<< HEAD
            ->action(function (Component&HasTableLayout $livewire): void {
                $this->toggleLayout($livewire);
            });
    }

    /**
     * Esegue il toggle del layout e aggiorna la vista
     */
    protected function toggleLayout(Component&HasTableLayout $livewire): void
    {
        $currentLayout = $livewire->getLayoutView();
        $newLayout = $currentLayout === TableLayoutEnum::GRID 
            ? TableLayoutEnum::LIST 
            : TableLayoutEnum::GRID;
        
        $livewire->setLayoutView($newLayout);
        
        // Aggiorna la vista
=======
            ->action(fn (Component&HasTableLayout $livewire) => $this->toggleLayout($livewire));
    }

    protected function toggleLayout(Component&HasTableLayout $livewire): void
    {
        $currentLayout = $livewire->getLayoutView();
        $newLayout = $currentLayout === TableLayoutEnum::GRID ? TableLayoutEnum::LIST : TableLayoutEnum::GRID;

        $livewire->setLayoutView($newLayout);
>>>>>>> origin/dev
        $livewire->dispatch('$refresh');
        $livewire->dispatch('refreshTable');
        $livewire->resetTable();
    }

<<<<<<< HEAD
    /**
     * Crea una nuova istanza dell'azione
     */
=======
>>>>>>> origin/dev
    public static function make(?string $name = null): static
    {
        return parent::make($name ?? 'layout');
>>>>>>> 4eb3395 (.)
    }
}

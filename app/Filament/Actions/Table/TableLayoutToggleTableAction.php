<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
namespace Modules\UI\app\Filament\Actions\Table;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayout;
use Modules\UI\app\Traits\TableLayoutTrait;

class TableLayoutToggleTableAction extends Action
{
    use TableLayoutTrait;

<<<<<<< HEAD
=======
=======
>>>>>>> e1394bd (.)
namespace Modules\UI\Filament\Actions\Table;

=======
namespace Modules\UI\app\Filament\Actions\Table;

>>>>>>> 57ac32d (.)
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
<<<<<<< HEAD

class TableLayoutToggleTableAction extends Action
{
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
>>>>>>> e1394bd (.)
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
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
<<<<<<< HEAD
=======
=======
>>>>>>> e1394bd (.)
        $this
=======
=======
namespace Modules\UI\Filament\Actions\Table;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
>>>>>>> 14e0cd5 (.)

class TableLayoutToggleTableAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD

        $this
>>>>>>> 57ac32d (.)
            ->name('layout')
            ->label('Cambia Layout')
            ->icon('heroicon-o-view-columns')
            ->action(fn (Component&HasTableLayout $livewire) => $this->toggleLayout($livewire));
    }

    protected function toggleLayout(Component&HasTableLayout $livewire): void
    {
        $currentLayout = $livewire->getLayoutView();
        $newLayout = $currentLayout === TableLayoutEnum::GRID ? TableLayoutEnum::LIST : TableLayoutEnum::GRID;
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> f697886 (fix: auto resolve conflict)
        
>>>>>>> e1394bd (.)
        $livewire->setLayoutView($newLayout);
=======

        $livewire->setLayoutView($newLayout);
=======
        $current = $this->getCurrentLayout();
        $this
            ->name('tableLayoutToggle')
             // Nessuna label, solo tooltip
            ->tooltip($current->getLabel())
            ->color($current->getColor()) // Colore basato sulla sessione
            ->icon($current->getIcon()) // Usa l'icona basata sulla sessione
            ->action(fn ($livewire) => $this->toggleLayout($livewire)) // Esegui il toggle

            ->requiresConfirmation(false); // Non richiede conferma
    }

    protected function toggleLayout(ListRecords $livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle(); // Esegui il toggle tra GRID e LIST
        Session::put('table_layout', $newLayout->value); // Salva il layout nella sessione
        // Aggiorna la vista del layout dinamicamente
        if (! property_exists($livewire, 'layoutView')) {
            throw new \Exception('add layoutView to ['.$livewire::class.']');
        }
        $livewire->layoutView = $newLayout;
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
        $livewire->dispatch('$refresh');
        $livewire->dispatch('refreshTable');
        $livewire->resetTable();
    }

<<<<<<< HEAD
    public static function make(?string $name = null): static
    {
        return parent::make($name ?? 'layout');
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
<<<<<<< HEAD
>>>>>>> e1394bd (.)
=======
=======
<<<<<<< HEAD
    public static function make(?string $name = null): static
    {
        return parent::make($name ?? 'layout');
=======
    protected function getCurrentLayout(): TableLayoutEnum
    {
        $layout = Session::get('table_layout', TableLayoutEnum::init()->value); // Recupera il layout dalla sessione
        if (! is_string($layout)) {
            return TableLayoutEnum::init();
        }
        $res = TableLayoutEnum::TryFrom($layout);
        if (null !== $res) {
            return $res;
        }

        return TableLayoutEnum::init();
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
>>>>>>> f697886 (fix: auto resolve conflict)
    }
}

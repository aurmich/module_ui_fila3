<?php

declare(strict_types=1);

namespace Modules\UI\app\Filament\Actions\Header;

use Filament\Actions\Action;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Modules\UI\Enums\TableLayoutEnum;

/**
 * Interfaccia per componenti che supportano il cambio di layout della tabella.
 */
interface HasTableLayout
{
    /**
     * Ottiene la vista del layout corrente.
     */
    public function getLayoutView(): TableLayoutEnum;

    /**
     * Imposta la vista del layout.
     */
    public function setLayoutView(TableLayoutEnum $layout): void;

    /**
     * Resetta la tabella.
     */
    public function resetTable(): void;
}

/**
 * Azione per alternare tra i layout della tabella.
 */
class TableLayoutToggleHeaderAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        // ... existing code ...
    }

    public static function make(?string $name = 'toggle-table-layout'): static
    {
        return parent::make($name)
            ->name('toggle-table-layout')
            ->label(__('Toggle Layout'))
            ->icon('heroicon-m-view-columns')
            ->action(function (Component $livewire): void {
                if (!$livewire instanceof HasTableLayout) {
                    return;
                }

                $currentLayout = $livewire->getLayoutView();
                $newLayout = $currentLayout === TableLayoutEnum::GRID
                    ? TableLayoutEnum::LIST
                    : TableLayoutEnum::GRID;

                $livewire->setLayoutView($newLayout);

                $livewire->dispatch('refresh');
                $livewire->resetTable();
            });
    }
}

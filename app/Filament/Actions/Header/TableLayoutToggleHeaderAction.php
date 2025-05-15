<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

use Filament\Actions\Action;

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
class TableLayoutToggleHeaderAction extends Action
{
    // use NavigationActionLabelTrait;
    public string $list_icon = 'heroicon-o-list-bullet';

    public string $grid_icon = 'heroicon-o-squares-2x2';

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->color('secondary')
            // ->label(trans('ui::'.static::getDefaultName().'.label'))
            // ->tooltip(trans('setting::database_connection.actions.database-backup.tooltip'))
            // ->icon(trans('setting::database_connection.actions.database-backup.icon'))
            // ->icon($this->list_icon)
            ->icon(fn ($livewire) => 'list' === $livewire->layoutView ? $this->list_icon : $this->grid_icon)
            ->action(
                function ($livewire) {
                    if ($livewire !== null) {
                        $livewire->layoutView = ('grid' === $livewire->layoutView ? 'list' : 'grid');
                    }
                }
            );
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
    public static function getDefaultName(): ?string
    {
        return 'table-layout-toggle-header';
>>>>>>> c6eb299 (.)
=======
    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
>>>>>>> Stashed changes
=======
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
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
=======
>>>>>>> Stashed changes
    }
}

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
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> e1394bd (.)
=======

>>>>>>> f4d4f3b (fix: auto resolve conflict)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    if ($livewire !== null) {
                        $livewire->layoutView = ('grid' === $livewire->layoutView ? 'list' : 'grid');
                    }
=======
                    $livewire->layoutView = ('grid' === $livewire->layoutView ? 'list' : 'grid');
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
=======
>>>>>>> 0080286 (.)
                }
            );
    }

    public static function getDefaultName(): ?string
    {
        return 'table-layout-toggle-header';
    }
}

<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\UI\Filament\Actions\Header;
=======
<<<<<<< HEAD
namespace Modules\UI\app\Filament\Actions\Header;
=======
namespace Modules\UI\Filament\Actions\Header;
>>>>>>> a675681 (.)
>>>>>>> aurmich/dev

use Filament\Actions\Action;

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
class TableLayoutToggleHeaderAction extends Action
{
<<<<<<< HEAD
    // use NavigationActionLabelTrait;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    // use NavigationActionLabelTrait;
>>>>>>> aurmich/dev
=======
    // use NavigationActionLabelTrait;
>>>>>>> a675681 (.)
>>>>>>> aurmich/dev
    public string $list_icon = 'heroicon-o-list-bullet';

    public string $grid_icon = 'heroicon-o-squares-2x2';

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->color('secondary')
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
            
>>>>>>> a675681 (.)
>>>>>>> aurmich/dev
            // ->label(trans('ui::'.static::getDefaultName().'.label'))
            // ->tooltip(trans('setting::database_connection.actions.database-backup.tooltip'))
            // ->icon(trans('setting::database_connection.actions.database-backup.icon'))
            // ->icon($this->list_icon)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a675681 (.)
>>>>>>> aurmich/dev
            ->icon(fn ($livewire) => 'list' === $livewire->layoutView ? $this->list_icon : $this->grid_icon)
            ->action(
                function ($livewire) {
                    if ($livewire !== null) {
                        $livewire->layoutView = ('grid' === $livewire->layoutView ? 'list' : 'grid');
                    }
                }
            );
    }

    public static function getDefaultName(): ?string
    {
        return 'table-layout-toggle-header';
    }
}

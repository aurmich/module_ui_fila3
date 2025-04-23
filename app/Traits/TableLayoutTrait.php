<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\UI\Traits;
=======
namespace Modules\UI\app\Traits;
>>>>>>> aurmich/dev
=======
namespace Modules\UI\app\Traits;
>>>>>>> aurmich/dev

use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayout;

trait TableLayoutTrait
{
    public function getTableLayout(): TableLayout
    {
        $value = Session::get('table_layout', TableLayout::GRID->value);
        if (is_string($value) || is_int($value)) {
            return TableLayout::tryFrom((string)$value) ?? TableLayout::GRID;
        }
        return TableLayout::GRID;
    }

    public function setTableLayout(TableLayout $layout): void
    {
        Session::put('table_layout', $layout->value);
    }

    public function refreshTable(): void
    {
        $this->dispatch('$refresh');
        $this->resetTable();
    }
<<<<<<< HEAD
    
=======

>>>>>>> aurmich/dev
    public function resetTable(): void
    {
        // Implementazione predefinita - le classi che usano questo trait dovrebbero sovrascrivere questo metodo
        $this->dispatch('reset-table');
    }
<<<<<<< HEAD
} 
=======
}
>>>>>>> aurmich/dev

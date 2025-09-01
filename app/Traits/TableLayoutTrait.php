<?php

declare(strict_types=1);

namespace Modules\UI\Traits;

use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayout;

trait TableLayoutTrait
{
    public function getTableLayout(): TableLayout
    {
        $value = Session::get('table_layout', TableLayout::GRID->value);
        if (is_string($value) || is_int($value)) {
<<<<<<< HEAD
            return TableLayout::tryFrom((string) $value) ?? TableLayout::GRID;
        }

=======
            return TableLayout::tryFrom((string)$value) ?? TableLayout::GRID;
        }
>>>>>>> 60908d2 (.)
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
    
>>>>>>> 60908d2 (.)
    public function resetTable(): void
    {
        // Implementazione predefinita - le classi che usano questo trait dovrebbero sovrascrivere questo metodo
        $this->dispatch('reset-table');
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 60908d2 (.)

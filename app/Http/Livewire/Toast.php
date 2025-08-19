<?php

declare(strict_types=1);

/**
 * @see https://github.com/bezhanSalleh/filament-language-switch/blob/main/src/Http/Livewire/FilamentLanguageSwitch.php
 */

namespace Modules\UI\Http\Livewire;

use Illuminate\Contracts\View\View;
<<<<<<< HEAD
=======
use Illuminate\View\View as ViewView;
>>>>>>> 8a76661 (.)
use Livewire\Component;

class Toast extends Component
{
<<<<<<< HEAD
    public function render(): View
=======
    public function render(): ViewView
>>>>>>> 8a76661 (.)
    {
        $view = 'ui::livewire.toast';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}

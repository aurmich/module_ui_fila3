<?php

declare(strict_types=1);

namespace Modules\Ui\Http\Livewire;

<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
<<<<<<< HEAD
=======
use Illuminate\Contracts\View\View;
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
use Livewire\Component;

class DarkModeSwitcher extends Component
{
    public bool $darkMode = false;

    public function mount(): void
    {
        // Check localStorage on the client side to set the dark mode
        $this->darkMode = filter_var(request()->cookie('dark_mode', 'false'), FILTER_VALIDATE_BOOLEAN);
    }

    public function toggleDarkMode(): void
    {
        $this->darkMode = !$this->darkMode;
        // Use localStorage for dark mode persistence on the client side
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

<<<<<<< HEAD
    public function render(): View
=======
<<<<<<< HEAD
    public function render()
=======
    public function render(): View
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
    {
        return view('ui::livewire.dark-mode.switcher');
    }
}

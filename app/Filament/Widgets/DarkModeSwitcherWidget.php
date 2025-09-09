<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms;
>>>>>>> 819632e (.)
=======
>>>>>>> e135428 (.)
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class DarkModeSwitcherWidget extends XotBaseWidget
{
    public ?array $data = [];

    protected static string $view = 'ui::filament.widgets.dark-mode-switcher';

    public bool $darkMode = false;

    public function mount(): void
    {
        $this->darkMode = filter_var(request()->cookie('dark_mode', 'false'), FILTER_VALIDATE_BOOLEAN);
    }

    public function toggleDarkMode(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->darkMode = ! $this->darkMode;

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

=======
        $this->darkMode = !$this->darkMode;
        
        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);
        
>>>>>>> 819632e (.)
=======
        $this->darkMode = ! $this->darkMode;

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

>>>>>>> e135428 (.)
        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 819632e (.)
=======
     *
>>>>>>> e135428 (.)
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    public function render(): View
    {
        return view(static::$view, [
            'darkMode' => $this->darkMode,
        ]);
    }
}

<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Filament\Forms;use Filament\Forms\Form;
=======
use Filament\Forms\Form;
>>>>>>> d635998 (.)
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
        $this->darkMode = !$this->darkMode;
        
        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);
                $this->darkMode = ! $this->darkMode;
=======
        $this->darkMode = ! $this->darkMode;
>>>>>>> d635998 (.)

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
<<<<<<< HEAD
     *      *
=======
     *
>>>>>>> d635998 (.)
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
<<<<<<< HEAD

    /**
     * Ottiene i dati pubblici per la vista.
     *
     * @return array<string, mixed>
     */
    public function getPublicViewData(): array
    {
        return [
            'darkMode' => $this->darkMode,
        ];
    }
=======
>>>>>>> d635998 (.)
}

<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class DarkModeSwitcherWidget extends XotBaseWidget
{
<<<<<<< HEAD
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> d3fc412d (.)

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
=======
        $this->darkMode = ! $this->darkMode;
>>>>>>> d3fc412d (.)

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
     *
     * @return array<int, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> d3fc412d (.)
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

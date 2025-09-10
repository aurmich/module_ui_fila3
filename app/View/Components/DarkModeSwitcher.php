<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;

/**
 * Componente Blade per il Dark Mode Switcher.
<<<<<<< HEAD
 * 
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 * 
 * @package Modules\UI\View\Components *
=======
 *
>>>>>>> d635998 (.)
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 */
class DarkModeSwitcher extends Component
{
    /**
     * Widget associato al componente.
     */
    protected DarkModeSwitcherWidget $widget;

    /**
     * Crea una nuova istanza del componente.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->widget = new DarkModeSwitcherWidget();        $this->widget = new DarkModeSwitcherWidget;
=======
        $this->widget = new DarkModeSwitcherWidget;
>>>>>>> d635998 (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
        if (! DarkModeSwitcherWidget::canView()) {
<<<<<<< HEAD
            /** @var view-string $view */
            $view = 'ui::components.empty';
            return view($view);
        }

        // Ottiene i dati pubblici dal widget
        $viewData = $this->widget->getPublicViewData();

        /** @var view-string $view */
        $view = 'ui::components.dark-mode-switcher';
        return \view($view, $viewData);
=======
            return view('ui::components.empty');
        }

        // Ottiene i dati dal widget
        $viewData = $this->widget->getViewData();

        return view('ui::filament.widgets.dark-mode-switcher', $viewData);
>>>>>>> d635998 (.)
    }
}

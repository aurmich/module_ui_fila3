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
=======
 * 
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 * 
 * @package Modules\UI\View\Components
>>>>>>> 819632e (.)
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
        $this->widget = new DarkModeSwitcherWidget;
=======
        $this->widget = new DarkModeSwitcherWidget();
>>>>>>> 819632e (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
<<<<<<< HEAD
        if (! DarkModeSwitcherWidget::canView()) {
            return view('ui::components.empty');
        }

        // Ottiene i dati dal widget
        $viewData = $this->widget->getViewData();

        return view('ui::filament.widgets.dark-mode-switcher', $viewData);
=======
        if (!DarkModeSwitcherWidget::canView()) {
            /** @var view-string $view */
            $view = 'ui::components.empty';
            return view($view);
        }

        // Ottiene i dati dal widget usando il metodo pubblico getPlaceholderData()
        $viewData = $this->widget->getPlaceholderData();

        /** @var array<string, mixed> $viewData */
        /** @var view-string $view */
        $view = 'ui::filament.widgets.dark-mode-switcher';
        return view($view, $viewData);
>>>>>>> 819632e (.)
    }
}

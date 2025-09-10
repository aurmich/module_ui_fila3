<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;

/**
 * Componente Blade per il Dark Mode Switcher.
 * 
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 * 
 * @package Modules\UI\View\Components *
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
        $this->widget = new DarkModeSwitcherWidget();        $this->widget = new DarkModeSwitcherWidget;
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
<<<<<<< HEAD
        if (!DarkModeSwitcherWidget::canView()) {
=======
        if (! DarkModeSwitcherWidget::canView()) {
>>>>>>> 1485e9d (.)
            /** @var view-string $view */
            $view = 'ui::components.empty';
            return view($view);
        }

<<<<<<< HEAD
        // Ottiene i dati dal widget usando il metodo pubblico getPlaceholderData()
        $viewData = $this->widget->getPlaceholderData();

        /** @var array<string, mixed> $viewData */
        /** @var view-string $view */
        $view = 'ui::filament.widgets.dark-mode-switcher';
        return view($view, $viewData);
=======
        // Ottiene i dati pubblici dal widget
        $viewData = $this->widget->getPublicViewData();

        /** @var view-string $view */
        $view = 'ui::components.dark-mode-switcher';
        return \view($view, $viewData);
>>>>>>> 1485e9d (.)
    }
}

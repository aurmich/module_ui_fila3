<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use function Safe\realpath;
use Modules\UI\Services\UIService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

/**
 * Service Provider per il modulo UI.
<<<<<<< HEAD
 *
 * Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
 * per garantire la corretta risoluzione dei path secondo la struttura dei moduli.
=======
>>>>>>> 9138ec4 (.)
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'UI';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Boot del service provider.
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
        //$componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        //Blade::anonymousComponentPath($componentViewPath);
        // Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
        // per garantire la corretta risoluzione dei path secondo la struttura dei moduli
=======
>>>>>>> 9138ec4 (.)
    }

    /**
     * Registra i servizi del provider.
     */
    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
=======
>>>>>>> 9138ec4 (.)
    }
}

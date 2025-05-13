<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;

use function Safe\realpath;

/**
 * Service Provider per il modulo UI.
=======
use function Safe\realpath;
use Modules\UI\Services\UIService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

/**
 * ---.
>>>>>>> 2cb2abd (.)
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'UI';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
<<<<<<< HEAD
     * Boot del service provider.
=======
     * Undocumented function.
>>>>>>> 2cb2abd (.)
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
    }

    /**
     * Registra i servizi del provider.
     */
    public function register(): void
    {
        parent::register();
=======

        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        Blade::anonymousComponentPath($componentViewPath);
        
        // Nota: abbiamo adottato l'approccio con GetModulePathByGeneratorAction per coerenza
        // con il pattern utilizzato in XotBaseServiceProvider e per la gestione centralizzata
        // dei percorsi dei moduli
    }

    public function register(): void
    {
        parent::register();
        // $loader = AliasLoader::getInstance();
        // $loader->alias('ui', UIService::class);
        // $this->registerBladeIcons(); //moved to XotBaseServiceProvider
>>>>>>> 2cb2abd (.)
    }
}

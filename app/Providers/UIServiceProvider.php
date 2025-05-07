<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
use function Safe\realpath;
use Modules\UI\Services\UIService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
=======
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

use function Safe\realpath;
>>>>>>> 4eb3395 (.)

/**
 * Service Provider per il modulo UI
 * Gestisce la registrazione dei componenti Blade e dei servizi UI
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'UI';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Inizializza il provider
     */
    public function boot(): void
    {
        parent::boot();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9256606 (.)
        $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        Blade::anonymousComponentPath($componentViewPath);
        
        // Nota: abbiamo adottato l'approccio con GetModulePathByGeneratorAction per coerenza
        // con il pattern utilizzato in XotBaseServiceProvider e per la gestione centralizzata
        // dei percorsi dei moduli
<<<<<<< HEAD
=======
        $relativePath = config('modules.paths.generator.component-view.path');
        $components_path = module_path($this->name, $relativePath);

        // $components_path = realpath(__DIR__.'/../resources/views/components');
        Blade::anonymousComponentPath($components_path);
>>>>>>> 4eb3395 (.)
=======
>>>>>>> 9256606 (.)
    }

    public function register(): void
    {
        parent::register();
        // $loader = AliasLoader::getInstance();
        // $loader->alias('ui', UIService::class);
        // $this->registerBladeIcons(); //moved to XotBaseServiceProvider
    }
}

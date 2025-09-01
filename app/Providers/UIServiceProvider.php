<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\AliasLoader;
=======
use function Safe\realpath;
>>>>>>> 90e8530 (.)
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
=======
use function Safe\realpath;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 60908d2 (.)
=======
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 90e8530 (.)

/**
 * Service Provider per il modulo UI.
 *
 * Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
 * per garantire la corretta risoluzione dei path secondo la struttura dei moduli.
 *
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    /**
     * Nome del modulo.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 60908d2 (.)
=======
     *
     * @var string
>>>>>>> 90e8530 (.)
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 60908d2 (.)
=======
     *
     * @var string
>>>>>>> 90e8530 (.)
     */
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 60908d2 (.)
=======
     *
     * @return void
>>>>>>> 90e8530 (.)
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
=======
        
>>>>>>> 90e8530 (.)
        // La registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
        // per garantire la corretta risoluzione dei path secondo la struttura dei moduli
        // $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        // Blade::anonymousComponentPath($componentViewPath);
    }

    /**
     * Registra i servizi del provider.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 60908d2 (.)
=======
     *
     * @return void
>>>>>>> 90e8530 (.)
     */
    public function register(): void
    {
        parent::register();
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Restituisce il percorso delle viste dei componenti UI.
=======
    
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     *
     * @return string
>>>>>>> 60908d2 (.)
=======
    
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     *
     * @return string
>>>>>>> 90e8530 (.)
     */
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}

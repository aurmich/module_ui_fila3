<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;
=======
use function Safe\realpath;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 60908d2 (.)

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
=======
     *
     * @var string
>>>>>>> 60908d2 (.)
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 60908d2 (.)
     */
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 60908d2 (.)
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        // La registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
        // per garantire la corretta risoluzione dei path secondo la struttura dei moduli
        // $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        // Blade::anonymousComponentPath($componentViewPath);
    }

    /**
     * Registra i servizi del provider.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 60908d2 (.)
     */
    public function register(): void
    {
        parent::register();
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
    }
<<<<<<< HEAD

    /**
     * Restituisce il percorso delle viste dei componenti UI.
=======
    
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     *
     * @return string
>>>>>>> 60908d2 (.)
     */
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}

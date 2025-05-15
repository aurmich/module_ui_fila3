<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< Updated upstream
<<<<<<< HEAD
use function Safe\realpath;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

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
     *
     * @var string
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
     *
     * @var string
     */
=======
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
=======
use Illuminate\Support\ServiceProvider;
>>>>>>> Stashed changes
use Modules\Xot\Providers\XotBaseServiceProvider;

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
     *
     * @var string
     */
    protected string $moduleName = 'UI';

<<<<<<< Updated upstream
>>>>>>> c6eb299 (.)
=======
    /**
     * Directory del modulo.
     *
     * @var string
     */
>>>>>>> Stashed changes
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
     *
     * @return void
<<<<<<< Updated upstream
=======
     * Undocumented function.
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< Updated upstream
<<<<<<< HEAD
        
        // La registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
        // per garantire la corretta risoluzione dei path secondo la struttura dei moduli
        // $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        // Blade::anonymousComponentPath($componentViewPath);
    }

    /**
     * Registra i servizi del provider.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
    }
    
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     *
     * @return string
     */
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
=======

        $relativePath = config('modules.paths.generator.component-view.path');
        $components_path = module_path($this->name, $relativePath);

        // $components_path = realpath(__DIR__.'/../resources/views/components');
        Blade::anonymousComponentPath($components_path);
=======
        // The parent boot already calls registerBladeComponents
>>>>>>> Stashed changes
    }

    /**
     * Registra i componenti Blade per il modulo UI.
     *
     * @return void
     */
    public function registerBladeComponents(): void
    {
        // Call parent method to ensure all base functionality is included
        parent::registerBladeComponents();
        
        // Using a fully qualified string to avoid direct class reference
        $generatorClass = 'Modules\\Xot\\Actions\\Module\\GetModulePathByGeneratorAction';
        $componentViewPath = app($generatorClass)->execute($this->moduleName, 'component-view');
        if (is_dir($componentViewPath)) {
            $this->loadViewsFrom($componentViewPath, 'ui');
        }
    }

    /**
     * Registra i servizi del provider.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();
<<<<<<< Updated upstream
        // $loader = AliasLoader::getInstance();
        // $loader->alias('ui', UIService::class);
        // $this->registerBladeIcons(); //moved to XotBaseServiceProvider
>>>>>>> c6eb299 (.)
=======
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
    }
    
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     *
     * @return string
     */
    public function getComponentViewPath(): string
    {
        $generatorClass = 'Modules\\Xot\\Actions\\Module\\GetModulePathByGeneratorAction';
        return app($generatorClass)->execute($this->moduleName, 'component-view');
>>>>>>> Stashed changes
    }
}

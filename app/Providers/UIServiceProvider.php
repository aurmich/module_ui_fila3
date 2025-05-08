<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider;

use function Safe\realpath;

/**
 * Service Provider per il modulo UI.
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

        $relativePath = config('modules.paths.generator.component-view.path');
        $components_path = module_path($this->name, $relativePath);

        // $components_path = realpath(__DIR__.'/../resources/views/components');
        Blade::anonymousComponentPath($components_path);

        // Pubblica la configurazione di laravel-localization
        $this->publishes([
            __DIR__.'/../config/laravel-localization.php' => config_path('laravel-localization.php'),
        ], 'config');

        // Carica le traduzioni
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ui');
=======
        
        // Rimuovo la registrazione manuale dei componenti Blade
        // perché è già gestita da XotBaseServiceProvider
        
        // Registro solo le configurazioni specifiche del modulo
        $this->registerConfig();
>>>>>>> fa12eb3 (.)
    }

    /**
     * Registra i servizi del provider.
     */
    public function register(): void
    {
        parent::register();
        // $loader = AliasLoader::getInstance();
        // $loader->alias('ui', UIService::class);
        // $this->registerBladeIcons(); //moved to XotBaseServiceProvider

        // Registra il service provider di laravel-localization
        $this->app->register(LaravelLocalizationServiceProvider::class);
<<<<<<< HEAD

=======
        /*
>>>>>>> fa12eb3 (.)
        // Carica la configurazione
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-localization.php', 'laravel-localization'
        );
<<<<<<< HEAD
=======
        */
>>>>>>> fa12eb3 (.)
    }
}

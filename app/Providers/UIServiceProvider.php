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
 * ---.
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'UI';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Undocumented function.
     */
    public function boot(): void
    {
        parent::boot();

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
    }
}

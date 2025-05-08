<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;

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
    }

    /**
     * Registra i servizi del provider.
     */
    public function register(): void
    {
        parent::register();
    }
}

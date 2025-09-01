<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

use Filament\Panel;
<<<<<<< HEAD
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;



/**
 * --
 */
=======
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
//use LaraZeus\Bolt\BoltPlugin;

>>>>>>> 60908d2 (.)
class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

<<<<<<< HEAD
    /**
     * ---
     */
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);


=======
    public function panel(Panel $panel): Panel
    {
        $panel=parent::panel($panel);
>>>>>>> 60908d2 (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
        /*
        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']);

        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        $panel->plugins($plugins);
        */
        return $panel;
    }
}

<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Assets\Css;
=======
>>>>>>> 90e8530 (.)
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
//use LaraZeus\Bolt\BoltPlugin;

<<<<<<< HEAD


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
=======
>>>>>>> 90e8530 (.)
class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

<<<<<<< HEAD
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
=======
    public function panel(Panel $panel): Panel
    {
        $panel=parent::panel($panel);
>>>>>>> 90e8530 (.)
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
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
=======
        
>>>>>>> 90e8530 (.)
        $panel->plugins($plugins);
        */
        return $panel;
    }
}

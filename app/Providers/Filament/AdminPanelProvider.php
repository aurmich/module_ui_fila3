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

// use LaraZeus\Bolt\BoltPlugin;
=======
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
//use LaraZeus\Bolt\BoltPlugin;
>>>>>>> 819632e (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
        $panel = parent::panel($panel);
=======
        $panel=parent::panel($panel);
>>>>>>> 819632e (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
<<<<<<< HEAD

        // $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
        //    ->defaultLocales(['it', 'en']);
        //
        // $boltPlugin = BoltPlugin::make();
        //
        // $plugins = [
        //    $spatieLaravelTranslatablePlugin,
        //    $boltPlugin
        // ];

        // $panel->plugins($plugins);

=======
        /*
        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']);

        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
        
        $panel->plugins($plugins);
        */
>>>>>>> 819632e (.)
        return $panel;
    }
}

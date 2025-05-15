<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;

<<<<<<< Updated upstream
<<<<<<< HEAD
class Slider
{
=======
<<<<<<< HEAD
/**
 * Classe per la gestione del blocco slider in Filament.
 * Permette di creare e configurare slider personalizzati con diverse opzioni di visualizzazione.
 */
class Slider
{
    /**
     * Crea un nuovo blocco slider.
     *
     * @param string $name Nome del blocco
     * @param string $context Contesto di utilizzo
     * @return Block Blocco slider configurato
     */
=======
class Slider
{
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
=======
class Slider
{
>>>>>>> Stashed changes
    public static function make(
        string $name = 'slider',
        string $context = 'form',
    ): Block {
<<<<<<< Updated upstream
<<<<<<< HEAD
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        // dddx($options);
=======
<<<<<<< HEAD
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

=======
=======
>>>>>>> Stashed changes
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        // dddx($options);
<<<<<<< Updated upstream
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
=======
>>>>>>> Stashed changes
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('method')
<<<<<<< Updated upstream
<<<<<<< HEAD

                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),
=======
<<<<<<< HEAD
                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),
=======
=======
>>>>>>> Stashed changes

                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),
>>>>>>> 5396bf4 (.)

                    // Select::make('_tpl')
                    //     ->label('layout')
                    //     ->options($options),
                    // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
=======
>>>>>>> Stashed changes
                    RadioImage::make('view')
                        ->options($options),
                ]
            )
            ->columns(1);
    }
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 5396bf4 (.)
=======
>>>>>>> Stashed changes

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\Select::make('layout')
                ->options([
                    'default' => 'Default',
                    'fullscreen' => 'Fullscreen',
                    'minimal' => 'Minimal',
                ])
                ->required(),
        ];
    }
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
=======
>>>>>>> 5512b9a (.)
>>>>>>> 5396bf4 (.)
=======
>>>>>>> Stashed changes
}

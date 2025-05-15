<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;

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
    public static function make(
        string $name = 'slider',
        string $context = 'form',
    ): Block {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        return Block::make($name)
            ->schema(
                [
                    TextInput::make('method')
                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),
                    RadioImage::make('view')
                        ->options($options),
                ]
            )
            ->columns(1);
    }
<<<<<<< Updated upstream
<<<<<<< HEAD

=======

    /**
     * Restituisce lo schema del form per la configurazione dello slider.
     *
     * @return array<string, mixed> Schema del form
     */
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
=======
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
}

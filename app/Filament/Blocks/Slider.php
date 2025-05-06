<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
<<<<<<< HEAD
use Modules\Xot\Filament\Blocks\XotBaseBlock;

class Slider extends XotBaseBlock
{
    public static function getBlockSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        return [

=======

class Slider
{
    public static function make(
        string $name = 'slider',
        string $context = 'form',
    ): Block {
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        // dddx($options);
        return Block::make($name)
            ->schema(
                [
>>>>>>> 3d9aa4f (.)
                    TextInput::make('method')

                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),

                    // Select::make('_tpl')
                    //     ->label('layout')
                    //     ->options($options),
                    // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

                    RadioImage::make('view')
                        ->options($options),
                ]
<<<<<<< HEAD
        ;
=======
            )
            ->columns(1);
>>>>>>> 3d9aa4f (.)
    }
}

<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder\Block;
// use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Paragraph extends XotBaseBlock
{
    public static function getBlockSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('paragraph', false);


        return [
=======
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
// use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Paragraph
{
    public static function make(
        string $name = 'paragraph',
        string $context = 'form',
    ): Block {
        // $view = 'ui::components.blocks.paragraph.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('paragraph', false);

        return Block::make($name)
            ->schema(
                [
>>>>>>> 3d9aa4f (.)
                    TextInput::make('title'),
                    RichEditor::make('text'),
                    Select::make('view')
                        ->options($options),
                    // RadioImage::make('view')
                    //    ->options($options),
                ]
<<<<<<< HEAD
            ;
=======
            );
>>>>>>> 3d9aa4f (.)
    }
}

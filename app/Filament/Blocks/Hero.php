<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Hero extends XotBaseBlock
{
    /*
    public static function make(
        string $name = 'hero',
        string $context = 'form',
    ): Block {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('hero', true);

        // ---------------
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('title'),
                    RichEditor::make('text'),
                    FileUpload::make('background')
                        // ->acceptedFileTypes(['application/pdf'])
                        // ->image()
                        ->directory('blocks')
                        ->preserveFilenames(),
                    Repeater::make('buttons')
                        ->schema([
                            TextInput::make('label')->required(),
                            TextInput::make('class'),
                            TextInput::make('link'),
                        ])
                        ->columns(3),
                ]
            );
    }
    */


    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('title'),
            RichEditor::make('text'),
            FileUpload::make('background')
                ->directory('blocks')
                ->preserveFilenames(),
            Repeater::make('buttons')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('class'),
                    TextInput::make('link'),
                ])
                ->columns(3),
        ];
    }
}

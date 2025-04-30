<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

class Image extends XotBaseBlock
{


    public static function getBlockSchema(): array
    {
        return  [
                    FileUpload::make('image'),

                    TextInput::make('url'),

                    Select::make('ratio')
                        ->options(static::getRatios())
                        ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                    TextInput::make('alt')
                        ->columnSpanFull(),

                    TextInput::make('caption')
                        ->columnSpanFull(),
        ];

    }

    public static function getRatios(): array
    {
        return [
            '4-3' => '4/3',
            '3-4' => '3/4',
            'free' => 'free',
        ];
    }

    public static function getRatioClass(string $ratio): string
    {
        return match ($ratio) {
            '4-3' => 'aspect-[4/3]',
            '3-4' => 'aspect-[3/4]',
            default => '',
        };
    }
}

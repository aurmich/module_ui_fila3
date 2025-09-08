<?php

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Category extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->label((string) __('ui::blocks.category.fields.name.label'))
                ->helperText((string) __('ui::blocks.category.fields.name.helper_text')),

            TextInput::make('slug')
                ->required()
                ->label((string) __('ui::blocks.category.fields.slug.label'))
                ->helperText((string) __('ui::blocks.category.fields.slug.helper_text')),

            Select::make('parent_id')
                ->relationship('parent', 'name')
                ->label((string) __('ui::blocks.category.fields.parent.label'))
                ->helperText((string) __('ui::blocks.category.fields.parent.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return (string) __('ui::blocks.category.title');
    }
}

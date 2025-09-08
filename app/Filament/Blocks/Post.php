<?php

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

final class Post extends \Modules\Xot\Filament\Blocks\XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->label((string) __('ui::blocks.post.fields.title.label'))
                ->helperText((string) __('ui::blocks.post.fields.title.helper_text')),

            RichEditor::make('content')
                ->required()
                ->label((string) __('ui::blocks.post.fields.content.label'))
                ->helperText((string) __('ui::blocks.post.fields.content.helper_text')),

            FileUpload::make('image')
                ->image()
                ->label((string) __('ui::blocks.post.fields.image.label'))
                ->helperText((string) __('ui::blocks.post.fields.image.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return (string) __('ui::blocks.post.title');
    }
}

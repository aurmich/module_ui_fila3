<?php

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\RichEditor;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Page extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            RichEditor::make('content')
                ->required()
                ->label((string) __('ui::blocks.page.fields.content.label'))
                ->helperText((string) __('ui::blocks.page.fields.content.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return (string) __('ui::blocks.page.title');
    }
}

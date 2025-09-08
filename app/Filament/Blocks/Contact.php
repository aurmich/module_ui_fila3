<?php

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Contact extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->label((string) __('ui::blocks.contact.fields.name.label'))
                ->helperText((string) __('ui::blocks.contact.fields.name.helper_text')),

            TextInput::make('email')
                ->email()
                ->required()
                ->label((string) __('ui::blocks.contact.fields.email.label'))
                ->helperText((string) __('ui::blocks.contact.fields.email.helper_text')),

            TextInput::make('phone')
                ->tel()
                ->label((string) __('ui::blocks.contact.fields.phone.label'))
                ->helperText((string) __('ui::blocks.contact.fields.phone.helper_text')),

            Textarea::make('message')
                ->required()
                ->label((string) __('ui::blocks.contact.fields.message.label'))
                ->helperText((string) __('ui::blocks.contact.fields.message.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return (string) __('ui::blocks.contact.title');
    }
}

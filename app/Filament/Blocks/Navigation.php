<?php
declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\Forms;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Classe per la gestione del blocco di navigazione in Filament.
 * Permette di creare e gestire voci di navigazione personalizzate.
 */
class Navigation extends XotBaseBlock
{
<<<<<<< Updated upstream


=======

class Navigation extends XotBaseBlock
{
>>>>>>> c6eb299 (.)
=======
    use TransTrait;

    /**
     * Restituisce lo schema del blocco di navigazione.
     *
     * @return array<string, mixed> Schema del blocco
     */
>>>>>>> Stashed changes
    public static function getBlockSchema(): array
    {
        return [
                Repeater::make('items')
                    ->label('Voci di navigazione')
                    ->schema([
                        TextInput::make('label')
                            ->label('Testo link')
                            ->required(),
                        TextInput::make('url')
                            ->label('URL link')
                            ->url()
                            ->required(),
                    ])
                    ->columns(2)
                    ->minItems(1),
        ];
    }
<<<<<<< Updated upstream
<<<<<<< HEAD

=======

    /**
     * Restituisce lo schema del form per la configurazione della navigazione.
     *
     * @return array<string, mixed> Schema del form
     */
>>>>>>> Stashed changes
    public function getFormSchema(): array
    {
        return [
            Repeater::make('items')
                ->label(static::trans('blocks.navigation.fields.items.label'))
                ->schema([
                    TextInput::make('text')
                        ->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')
                        ->label(static::trans('blocks.navigation.fields.url.label')),
                ]),
        ];
    }
<<<<<<< Updated upstream
=======
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
}

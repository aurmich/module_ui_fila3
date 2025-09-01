<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\ColumnGroup;
=======
use Filament\Tables\Columns\Column;
>>>>>>> 90e8530 (.)
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\ColumnGroup;

class DummyActionsColumn extends ColumnGroup
{
<<<<<<< HEAD
=======
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\ColumnGroup;

class DummyActionsColumn extends ColumnGroup
{
    

>>>>>>> 60908d2 (.)
=======
    

>>>>>>> 90e8530 (.)
    protected array $actions = [];

    public function actions(array $actions): static
    {
        $this->actions = $actions;

        return $this;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->wrapHeader(true);
<<<<<<< HEAD
<<<<<<< HEAD

        $this->extraHeaderAttributes(['class' => 'hidden no-header-group', 'style' => 'display: none']);
=======
        
        $this->extraHeaderAttributes(['class' => 'hidden no-header-group','style' => 'display: none']); 
>>>>>>> 90e8530 (.)
        $this->columns([
            IconColumn::make('uno')
            ->label('')
            ->default(false)
            ->boolean()
            ->extraCellAttributes(['class' => 'px-0'])
            ->action(Action::make('uno-action')
                ->label('Prova Action')
                
                ->action(function () {
                    dddx('Azione prova eseguita1!');
                })),
            IconColumn::make('due')
<<<<<<< HEAD
                ->label('')
                ->default(true)
                ->boolean()
                ->extraCellAttributes(['class' => 'px-0'])
                ->action(Action::make('due-action')
                    ->label('Prova Action')
                    ->action(function () {
                        dddx('Azione prova eseguita2!');
                    })),
=======
        
        $this->extraHeaderAttributes(['class' => 'hidden no-header-group','style' => 'display: none']); 
        $this->columns([
            IconColumn::make('uno')
            ->label('')
            ->default(false)
            ->boolean()
            ->extraCellAttributes(['class' => 'px-0'])
            ->action(Action::make('uno-action')
                ->label('Prova Action')
                
                ->action(function () {
                    dddx('Azione prova eseguita1!');
                })),
            IconColumn::make('due')
=======
>>>>>>> 90e8530 (.)
            ->label('')
            ->default(true)
            ->boolean()
            ->extraCellAttributes(['class' => 'px-0'])
            ->action(Action::make('due-action')
                ->label('Prova Action')
                ->action(function () {
                    dddx('Azione prova eseguita2!');
                })),
<<<<<<< HEAD
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        ]);
    }
}

<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
use Modules\Xot\Models\CacheLock;

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

<<<<<<< HEAD

=======
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCacheLocks::route('/'),
            'create' => Pages\CreateCacheLock::route('/create'),
            'edit' => Pages\EditCacheLock::route('/{record}/edit'),
        ];
    }
}

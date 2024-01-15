<?php

namespace Modules\Xot\Filament\Pages;

use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Modules\Tenant\Services\TenantService;
use Filament\Forms\Concerns\InteractsWithForms;

class MetatagPage extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'xot::filament.pages.metatag';

    public function mount(): void
    {
        //$this->form->fill();
        $data=config('metatag');
        $this->form->fill($data);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('sitename'),
                TextInput::make('subtitle'),
                TextInput::make('generator'),
                TextInput::make('charset'),
                TextInput::make('author'),
                TextInput::make('description'),
                TextInput::make('keywords'),
                /*
                FileUpload::make('logo_header')
                    ->preserveFilenames()
                    ->image()
                    ->imageEditor()
                    ->moveFiles()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('logo')
                    ->formatStateUsing(fn ($state): array =>[basename($state)])
                    //->formatStateUsing(fn ($state): array =>['/uploads/photos/pexels-giona-mason-19138633.jpg'])
                    ->dehydrateStateUsing(fn ($state) => collect($state)->map(function($item){
                        return Storage::disk('public')->url($item);
                    })->first() )
                                      ,
                */
                TextInput::make('logo_header'),
                TextInput::make('logo_header_dark')
                    ->helperText('logo for dark css'),
                    //'logo_header'=>'bimaticard::img/logo.png',
                    //'logo_header_dark' => 'bimaticard::img/logo_dark.png',
                TextInput::make('logo_height'),
            ])->columns(2)
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();
        TenantService::saveConfig('metatag',$data);

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}

<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Clusters\Appearance\Pages;

use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Modules\Cms\Filament\Clusters\Appearance;

use function Safe\file_get_contents;
<<<<<<< HEAD
=======
use function Safe\file_put_contents;
>>>>>>> origin/dev

/**
 * @property Forms\ComponentContainer $form
 */
class Headernav extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'cms::filament.clusters.appearance.pages.headernav';

    protected static ?string $cluster = Appearance::class;

    protected static ?int $navigationSort = 2;

    public ?array $data = [];

    public function mount(): void
    {
        $this->checkOrCreateConfigAppearance();

        // $filePath = config_path($filePath); // Percorso del file di configurazione
        $path = implode('/', array_reverse(explode('.', request()->getHost())));
        $filePath = 'config/'.$path.'/appearance.php';
        $key = 'other3';
        // $value = 'other2';
        $value = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => [
                'subkey1' => 'subvalue1',
                'subkey2' => 'subvalue2',
            ],
        ];
<<<<<<< HEAD

        // $this->addConfigValue(base_path('config/'.$path.'/appearance.php'), $key, $value);
=======
>>>>>>> origin/dev

        // $this->addConfigValue(base_path('config/'.$path.'/appearance.php'), $key, $value);

        // dddx(config('appearance'));

        $this->fillForms();
    }

    public function addConfigValue(string $filePath, int $key, string $value): void
    {
        // Leggi il contenuto del file
        $config = file_get_contents($filePath);

        // Trasforma il contenuto del file in un array PHP
        $configArray = include $filePath;

        // Aggiungi o aggiorna il valore dell'array
        $configArray[$key] = $value;

        // Converte l'array PHP in una stringa di codice PHP
        $newConfig = '<?php declare(strict_types=1); return '.var_export($configArray, true).';';

        // Scrivi la nuova configurazione nel file
        file_put_contents($filePath, $newConfig);
        Artisan::call('optimize:clear');
    }

<<<<<<< HEAD
    public function checkOrCreateConfigAppearance()
=======
    public function checkOrCreateConfigAppearance(): void
>>>>>>> origin/dev
    {
        if (! config('appearance')) {
            // Creare un file di configurazione in modo programmatico
            $path = implode('/', array_reverse(explode('.', request()->getHost())));
            $filePath = base_path('config/'.$path.'/appearance.php');
<<<<<<< HEAD
            $configContent = <<<PHP
=======
            $configContent = <<<'PHP'
>>>>>>> origin/dev
            <?php

            declare(strict_types=1);

            return [

            ];
            PHP;
            file_put_contents($filePath, $configContent);
            // dddx(config('appearance'));
        }
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();
        $data = [];

        $this->form->fill($data);
    }

    // protected function getForms(): array
    // {
    //    return [
    //        'editLogoForm',
    //    ];
    // }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Section::make('Profile Information')
                // ->description('Update your account\'s profile information and email address.')
                // ->schema([
                ColorPicker::make('background_color'),
                FileUpload::make('background'),
                ColorPicker::make('overlay_color'),
                TextInput::make('overlay_opacity')->numeric()->minValue(0)->maxValue(100),

                // ])->columns(2),
            ])->columns(2)
            // ->model($this->getUser())
            ->statePath('data');
    }

    protected function getUpdateFormActions(): array
    {
        return [
            Action::make('updateAction')
                ->label(__('filament-panels::pages/auth/edit-profile.form.actions.save.label'))
                ->submit('editForm'),
        ];
    }

    public function updateData(): void
    {
        try {
            $data = $this->form->getState();
            dddx($data);
            // $this->handleRecordUpdate($this->getUser(), $data);
        } catch (Halt $exception) {
            dddx($exception->getMessage());

            return;
        }
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        dddx($record);
        $record->update($data);

        return $record;
    }
}

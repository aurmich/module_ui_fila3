# Componenti UI

<<<<<<< HEAD
<<<<<<< HEAD
=======

### Versione HEAD

>>>>>>> 9256606 (.)
### Versione HEAD

## Panoramica
Il modulo UI fornisce un set completo di componenti riutilizzabili per costruire interfacce coerenti e accessibili.

## Componenti Base

### Button
```php
<x-ui.button
    variant="primary|secondary|outline"
    size="sm|md|lg"
    :disabled="false"
>
    Testo Pulsante
</x-ui.button>
```

### Input
```php
<x-ui.input
    type="text|email|password"
    name="field_name"
    label="Label Campo"
    :error="$errors->first('field_name')"
/>
```

### Select
```php
<x-ui.select
    name="field_name"
    label="Label Campo"
    :options="$options"
    :value="$selectedValue"
/>
```

## Componenti Layout

### Card
```php
<x-ui.card>
    <x-slot name="header">
        Header Card
    </x-slot>
    
    Contenuto Card
    
    <x-slot name="footer">
        Footer Card
    </x-slot>
</x-ui.card>
```

### Grid
```php
<x-ui.grid
    cols="1 md:2 lg:3"
    gap="4"
>
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-ui.grid>
```

### Container
```php
<x-ui.container
    size="sm|md|lg|xl"
    padding="4"
>
    Contenuto Container
</x-ui.container>
```

## Componenti Form

### Form Group
```php
<x-ui.form-group
    label="Label Campo"
    name="field_name"
    :error="$errors->first('field_name')"
>
    <x-ui.input name="field_name" />
</x-ui.form-group>
```

### Checkbox
```php
<x-ui.checkbox
    name="field_name"
    label="Label Checkbox"
    :checked="$isChecked"
/>
```

### Radio
```php
<x-ui.radio
    name="field_name"
    label="Label Radio"
    value="option_value"
    :checked="$isSelected"
/>
```

## Componenti Feedback

### Alert
```php
<x-ui.alert
    type="success|error|warning|info"
    :dismissible="true"
>
    Messaggio Alert
</x-ui.alert>
```

### Toast
```php
<x-ui.toast
    type="success|error"
    :auto-close="true"
    :duration="5000"
>
    Messaggio Toast
</x-ui.toast>
```

## Best Practices

1. **Riutilizzo**
   - Preferire componenti standard
   - Evitare duplicazione
   - Mantenere coerenza

2. **Accessibilità**
   - Usare attributi ARIA
   - Supportare keyboard
   - Fornire feedback

3. **Personalizzazione**
   - Usare props per varianti
   - Mantenere default sensati
   - Documentare opzioni

## Collegamenti Bidirezionali
- [README](README.md)
- [Design System](design-system.md)
- [Layout](layouts-and-themes.md)

## Vedi Anche
- [Filament Components](../../Cms/docs/filament-components.md)
- [Theme Components](../../Theme/docs/components.md)
- [Form Components](form-components.md)
## Note
Questa documentazione fornisce una panoramica dei componenti disponibili. Per i dettagli completi, consultare la documentazione specifica nei moduli. 

## Collegamenti tra versioni di components.md
* [components.md](../../../UI/docs/components.md)
* [components.md](../../../UI/docs/themes/components.md)
* [components.md](../../../Cms/docs/components.md)
* [components.md](../../../../Themes/One/docs/components.md)


### Versione Incoming

<<<<<<< HEAD
=======
>>>>>>> 4eb3395 (.)
=======

### Versione Alternativa


---

>>>>>>> 9256606 (.)
## Form Components

### CustomSelect
```php
CustomSelect::make('field_name')
    ->label('trans.key')
    ->relationship('relation', 'column')
    ->searchable()
    ->preload()
    ->required()
```

#### Caratteristiche
- Ricerca asincrona
- Precaricamento opzionale
- Supporto per relazioni multiple
- Validazione integrata
- Cache dei risultati

### MoneyInput
```php
use Modules\UI\Forms\Components\MoneyInput;

MoneyInput::make('premio_lordo')
    ->currency('EUR')
    ->step(0.01)
    ->minValue(0)
    ->required()
```

#### Caratteristiche
- Formattazione automatica
- Supporto multi valuta
- Validazione numerica
- Gestione decimali
- Maschere di input

### DateRangePicker
```php
use Modules\UI\Forms\Components\DateRangePicker;

DateRangePicker::make('periodo')
    ->displayFormat('d/m/Y')
    ->minDate(today())
    ->required()
```

#### Caratteristiche
- Selezione range date
- Formati personalizzabili
- Localizzazione
- Validazione range
- Calendario popup

### FileUpload
```php
use Modules\UI\Forms\Components\FileUpload;

FileUpload::make('documento')
    ->disk('s3')
    ->directory('documenti')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(5120) // 5MB
```

## Table Components

### CustomDataTable
```php
use Modules\UI\Tables\Components\CustomDataTable;

CustomDataTable::make()
    ->paginated(true)
    ->searchable(['nome', 'email'])
    ->sortable(['created_at'])
    ->bulkActions([
        'delete' => 'Elimina',
        'export' => 'Esporta'
    ])
```

#### Caratteristiche
- Ordinamento colonne
- Filtri avanzati
- Azioni personalizzabili
- Paginazione
- Export dati

### StatusBadge
```php
use Modules\UI\Tables\Components\StatusBadge;

StatusBadge::make('stato')
    ->colors([
        'danger' => 'annullato',
        'warning' => 'sospeso',
        'success' => 'attivo'
    ])
```

#### Caratteristiche
- Colori dinamici
- Icone integrate
- Stati personalizzabili
- Tooltips
- Animazioni

### ActionButtons
```php
use Modules\UI\Tables\Components\ActionButtons;

ActionButtons::make()
    ->actions([
        'view' => [
            'icon' => 'heroicon-o-eye',
            'url' => fn ($record) => route('view', $record)
        ],
        'edit' => [
            'icon' => 'heroicon-o-pencil',
            'url' => fn ($record) => route('edit', $record)
        ]
    ])
```

## Chart Components

### LineChart
```php
use Modules\UI\Charts\Components\LineChart;

LineChart::make()
    ->datasets([
        [
            'label' => 'Vendite',
            'data' => [10, 20, 30],
            'borderColor' => '#4CAF50'
        ]
    ])
    ->labels(['Gen', 'Feb', 'Mar'])
    ->options([
        'responsive' => true,
        'maintainAspectRatio' => false
    ])
```

#### Caratteristiche
- Dati dinamici
- Zoom e pan
- Tooltips interattivi
- Responsive
- Temi personalizzabili

### PieChart
```php
use Modules\UI\Charts\Components\PieChart;

PieChart::make()
    ->datasets([
        [
            'data' => [30, 50, 20],
            'backgroundColor' => ['#4CAF50', '#2196F3', '#FFC107']
        ]
    ])
    ->labels(['A', 'B', 'C'])
```

#### Caratteristiche
- Legenda interattiva
- Animazioni
- Doughnut mode
- Labels personalizzabili
- Export immagine

### StatsOverview
```php
use Modules\UI\Charts\Components\StatsOverview;

StatsOverview::make()
    ->stats([
        [
            'label' => 'Totale Polizze',
            'value' => 1234,
            'icon' => 'heroicon-o-document-text',
            'color' => 'primary'
        ],
        [
            'label' => 'Premi Totali',
            'value' => '€ 123.456',
            'icon' => 'heroicon-o-currency-euro',
            'color' => 'success'
        ]
    ])
```

## Layout Components

### AdminLayout
```php
use Modules\UI\Layouts\Components\AdminLayout;

AdminLayout::make()
    ->title('Dashboard')
    ->breadcrumbs([
        'Home' => route('home'),
        'Dashboard' => null
    ])
    ->notifications(true)
```

#### Caratteristiche
- Sidebar collassabile
- Breadcrumbs
- Notifiche
- Tema dark/light
- Responsive

### PrintLayout
```php
use Modules\UI\Layouts\Components\PrintLayout;

PrintLayout::make()
    ->orientation('portrait')
    ->pageSize('a4')
    ->margins([
        'top' => 20,
        'right' => 15,
        'bottom' => 20,
        'left' => 15
    ])
```

#### Caratteristiche
- Ottimizzato per stampa
- Header/footer personalizzabili
- Paginazione
- Stili CSS print
- No elementi UI

<<<<<<< HEAD
<<<<<<< HEAD



=======
<<<<<<< HEAD
=======


=======
=======

>>>>>>> aurmich/dev
>>>>>>> 4eb3395 (.)
=======

### Versione HEAD





### Versione Alternativa


### Versione HEAD


### Versione Alternativa




### Versione Alternativa


### Versione Alternativa



---


---

>>>>>>> 9256606 (.)

### DarkModeSwitcher
```php
// Livewire Component
use Modules\Ui\Http\Livewire\DarkModeSwitcher;

// In una blade template:
<livewire:ui::dark-mode-switcher />
```

#### Caratteristiche
- Toggle tema chiaro/scuro
- Persistenza con cookie
- Icone dinamiche per modalità chiaro/scuro
- Compatibilità con Tailwind Dark Mode
- Integrazione con Livewire 3

#### View
Il componente utilizza la vista `ui::livewire.dark-mode.switcher` che contiene:
- Button per il toggle tra tema chiaro/scuro
- Script per la gestione del cookie e l'applicazione della classe CSS `.dark`
- SVG icons per modalità chiara e scura

<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> aurmich/dev
=======
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
=======

### Versione HEAD



### Versione Alternativa


### Versione Alternativa


---


### Versione Alternativa


---



### Versione Alternativa


---


---


---


---

>>>>>>> 9256606 (.)
## Componenti Base

### Forms
```blade
<x-ui::form>
  <x-ui::input name="email" type="email" />
  <x-ui::button type="submit">Invia</x-ui::button>
</x-ui::form>
```

### Tables
```blade
<x-ui::table>
  <x-ui::th>Nome</x-ui::th>
  <x-ui::td>{{ $user->name }}</x-ui::td>
</x-ui::table>
```

### Cards
```blade
<x-ui::card>
  <x-ui::card-header>Titolo</x-ui::card-header>
  <x-ui::card-body>Contenuto</x-ui::card-body>
</x-ui::card>
```

## Componenti Complessi

### Modal
```blade
<x-ui::modal id="my-modal">
  <x-slot name="title">Titolo Modal</x-slot>
  <x-slot name="content">Contenuto Modal</x-slot>
</x-ui::modal>
```

### Dropdown
```blade
<x-ui::dropdown>
  <x-ui::dropdown-item>Opzione 1</x-ui::dropdown-item>
  <x-ui::dropdown-item>Opzione 2</x-ui::dropdown-item>
</x-ui::dropdown>
```

## Layout

### Grid
```blade
<x-ui::grid cols="3">
  <div>Colonna 1</div>
  <div>Colonna 2</div>
  <div>Colonna 3</div>
</x-ui::grid>
```

### Container
```blade
<x-ui::container>
  <x-ui::row>
    <x-ui::col>Contenuto</x-ui::col>
  </x-ui::row>
</x-ui::container>
```

## Utility

### Alert
```blade
<x-ui::alert type="success">
  Operazione completata con successo!
</x-ui::alert>
```

### Badge
```blade
<x-ui::badge type="warning">
  Nuovo
</x-ui::badge>
```

### FilterDropdown
```php
use Modules\UI\Components\FilterDropdown;

FilterDropdown::make('stato')
    ->options([
        'attivo' => 'Attivo',
        'sospeso' => 'Sospeso',
        'annullato' => 'Annullato'
    ])
    ->multiple()
    ->searchable()
```

### Modal
```php
use Modules\UI\Components\Modal;

Modal::make('conferma')
    ->title('Conferma Operazione')
    ->content('Sei sicuro di voler procedere?')
    ->actions([
        'confirm' => [
            'label' => 'Conferma',
            'color' => 'primary'
        ],
        'cancel' => [
            'label' => 'Annulla',
            'color' => 'secondary'
        ]
    ])
```

## Best Practices
1. Utilizzare i componenti esistenti invece di crearne di nuovi
2. Mantenere la consistenza nelle props e negli slot
3. Documentare eventuali modifiche o estensioni
4. Testare la responsività su diversi dispositivi

## Temi
- I componenti supportano i temi tramite Tailwind
- Utilizzare le classi di utility per personalizzazioni
- Rispettare le variabili CSS definite nel tema 

## Configurazione Globale

### Tema
```php
// config/ui.php
return [
    'theme' => [
        'colors' => [
            'primary' => '#4CAF50',
            'secondary' => '#2196F3',
            'success' => '#4CAF50',
            'danger' => '#F44336',
            'warning' => '#FFC107'
        ],
        'fonts' => [
            'base' => 'Inter',
            'mono' => 'JetBrains Mono'
        ]
    ]
];
```

### Personalizzazione
```php
// Pubblicare assets
php artisan vendor:publish --tag=ui-assets

// Pubblicare configurazione
php artisan vendor:publish --tag=ui-config

// Pubblicare views
php artisan vendor:publish --tag=ui-views
<<<<<<< HEAD
<<<<<<< HEAD
``` 

---



``` 


``` 
``` 
``` 

=======
<<<<<<< HEAD
``` 
=======


=======
``` 
=======

>>>>>>> aurmich/dev
=======

### Versione HEAD

``` 

---


>>>>>>> 9256606 (.)

``` 


``` 
``` 
<<<<<<< HEAD
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
=======
``` 


### Versione Alternativa


### Versione HEAD

``` 

### Versione Alternativa




### Versione Alternativa

``` 

### Versione Alternativa



---


``` 

### Versione Alternativa

``` 

---


### Versione Alternativa

``` 

---



### Versione Alternativa


---


---


---


---

>>>>>>> 9256606 (.)

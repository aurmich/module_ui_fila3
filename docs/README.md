# Modulo UI

<<<<<<< HEAD
## Introduzione
Il modulo UI fornisce i componenti base dell'interfaccia utente e le funzionalità di presentazione.

## Indice

### Componenti
- [Componenti Base](components/BASE.md)
- [Form Components](components/FORMS.md)
- [Table Components](components/TABLES.md)
- [Layout Components](components/LAYOUTS.md)

### Temi
- [Gestione Temi](themes/MANAGEMENT.md)
- [Personalizzazione](themes/CUSTOMIZATION.md)
- [Responsive Design](themes/RESPONSIVE.md)

### Framework
- [Laravel 12.x](../../../docs/framework/LARAVEL.md)
- [Filament](../../../docs/framework/FILAMENT.md)
- [Livewire](../../../docs/framework/LIVEWIRE.md)
- [Folio & Volt](../../../docs/framework/FOLIO_VOLT.md)

### Sviluppo
- [Setup](development/SETUP.md)
- [Workflow](development/WORKFLOW.md)
- [Testing](development/TESTING.md)

### Collegamenti ad Altri Moduli
- [Xot Module](../../Xot/docs/README.md)
- [User Module](../../User/docs/README.md)
- [Patient Module](../../Patient/docs/README.md)
- [Media Module](../../Media/docs/README.md)

### Collegamenti Esterni
- [Documentazione Principale](../../../docs/README.md)
- [Standards](../../../docs/standards/CODING.md)
- [Best Practices](../../../docs/standards/DOCUMENTATION.md)
- [Security](../../../docs/standards/SECURITY.md)

## Componenti Principali

### Form Components
```php
class LoginForm extends Component
{
    use InteractsWithForms;
    
    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('email')
                ->email()
                ->required(),
            TextInput::make('password')
                ->password()
                ->required(),
        ]);
    }
}
```

### Table Components
```php
class UserTable extends Component
{
    use InteractsWithTable;
    
    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ]);
    }
}
```

### Layout Components
```php
class AppLayout extends Component
{
    public function render()
    {
        return view('ui::layouts.app', [
            'menu' => $this->getMenu(),
            'user' => auth()->user(),
        ]);
    }
    
    protected function getMenu(): array
    {
        return [
            // Menu structure
        ];
    }
}
```

## Best Practices

### 1. Componenti
- Mantenere i componenti piccoli e riutilizzabili
- Usare props per la configurazione
- Documentare props e eventi
- Seguire le convenzioni di naming

### 2. Temi
- Usare variabili CSS
- Supportare dark/light mode
- Mantenere la coerenza visiva
- Seguire le linee guida di accessibilità

### 3. Performance
- Lazy loading per componenti pesanti
- Ottimizzare le immagini
- Minimizzare CSS/JS
- Usare caching appropriato

## Collegamenti Rapidi
- [Torna alla Documentazione Principale](../../../docs/README.md)
- [Standards di Codifica](../../../docs/standards/CODING.md)
- [Componenti Base](components/BASE.md)
- [Sviluppo](development/SETUP.md)
=======
## Descrizione

Il modulo UI fornisce componenti di interfaccia utente riutilizzabili, layout e utility per costruire interfacce web coerenti e visivamente accattivanti all'interno dell'applicazione. Basato su Tailwind CSS e integrato con Filament, offre un'esperienza utente moderna e reattiva.

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
## Convenzioni di Namespace

**IMPORTANTE**: Il modulo UI segue una convenzione specifica per i namespace dei componenti Filament:

- Anche se i file si trovano fisicamente in `app/Filament/...`, il namespace corretto è `Modules\UI\Filament\...`
- **NON** utilizzare `Modules\UI\app\Filament\...` anche se sembra la mappatura logica

Per maggiori dettagli, consulta:
- [Convenzioni di Namespace](../../../docs/rules/namespace_conventions.md)
- [Risoluzione Conflitti](CONFLITTI_MERGE_RISOLTI.md)

<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
## Analisi PHPStan

Il modulo è stato analizzato con PHPStan per migliorare la qualità del codice:

- [Livello 1 - Analisi base](phpstan/level_1.md)
- [Livello 5 - Analisi intermedia](phpstan/level_5.md)
- [Livello 10 - Analisi avanzata](phpstan/level_10.md)
- [Documentazione generale PHPStan](/docs/phpstan/problemi_e_soluzioni.md)

## Componenti Principali

### Livewire

- **DarkModeSwitcher**: Componente per attivare/disattivare la modalità scura dell'interfaccia
- **ImageGallery**: Visualizzatore di gallerie di immagini con supporto per lightbox

### Components

- **Render/Block**: Componente per il rendering di blocchi di contenuto dinamici
- **Render/Blocks**: Componente per il rendering di collezioni di blocchi
- **BreadLink**: Componente per la generazione di breadcrumb
- **Svg**: Componente per il rendering di icone SVG
- **Logo**: Componente per visualizzare il logo dell'applicazione

### Filament

- **Forms/Components**: Set di componenti di form avanzati per Filament
  - IconPicker: Selettore di icone
  - PasswordStrengthField: Campo password con indicatore di robustezza
  - AddressField: Campo per l'inserimento di indirizzi
  - TreeField: Campo per gestire dati gerarchici

- **Blocks**: Componenti per costruire layout modulari
  - Title: Blocco titolo
  - Image: Blocco immagine
  - ImagesGallery: Galleria di immagini
  - VideoSpatie: Player video basato su Spatie Media Library

- **Widgets**: Widget per dashboard
  - OverlookWidget: Widget di panoramica
  - StatWithIconWidget: Statistiche con icone
  - GroupWidget: Widget per raggruppare altri widget

### Actions

- **GetAllIconsAction**: Recupera tutte le icone disponibili
- **GetAllBlocksAction**: Recupera tutti i blocchi di contenuto disponibili

## Enums

- **TableLayoutEnum**: Tipi di layout per tabelle
- **CornerPositionEnum**: Posizioni per elementi negli angoli

## Dipendenze

Il modulo dipende dai seguenti pacchetti:

- `spatie/laravel-medialibrary`: Per la gestione dei media
- `filament/filament`: Per componenti dell'interfaccia amministrativa
- `livewire/livewire`: Per componenti interattivi

## Utilizzo

Per utilizzare i componenti UI nel tuo progetto:

1. Includi il modulo UI nelle dipendenze del tuo progetto
2. Importa i componenti o le classi necessarie
3. Utilizza i componenti nei tuoi template Blade o nelle classi PHP

## Links

- [Documentazione PHPStan generale](/docs/phpstan.md)
- [Problemi e soluzioni PHPStan](/docs/phpstan/problemi_e_soluzioni.md) 
>>>>>>> aurmich/dev

# Modulo UI

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

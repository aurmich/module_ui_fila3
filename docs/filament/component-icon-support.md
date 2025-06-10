# Supporto per Icone nei Componenti Filament

## Riepilogo della Compatibilità

Questa tabella mostra quali componenti Filament supportano quali metodi per le icone:

| Componente          | `icon()`   | `prefixIcon()` | `suffixIcon()` | Alternative |
|---------------------|------------|----------------|----------------|-------------|
| Section             | ✅         | ❌             | ❌             | - |
| Card                | ✅         | ❌             | ❌             | - |
| TextInput           | ❌         | ✅             | ✅             | - |
| Textarea            | ❌         | ✅             | ✅             | - |
| Select              | ❌         | ✅             | ✅             | - |
| Toggle              | ❌         | ✅             | ✅             | - |
| Checkbox            | ❌         | ✅             | ✅             | - |
| Radio               | ❌         | ✅             | ✅             | - |
| FileUpload          | ❌         | ❌             | ❌             | Usare Section o SlotIcon |
| DatePicker          | ❌         | ✅             | ✅             | - |
| TimePicker          | ❌         | ✅             | ✅             | - |
| ColorPicker         | ❌         | ✅             | ✅             | - |
| KeyValue            | ❌         | ❌             | ❌             | - |
| RichEditor          | ❌         | ❌             | ❌             | - |
| Repeater            | ✅         | ❌             | ❌             | - |
| Builder             | ✅         | ❌             | ❌             | - |
| Tabs                | ✅         | ❌             | ❌             | - |
| Tab (Tabs\Tab)      | ✅         | ❌             | ❌             | - |
| Wizard              | ✅         | ❌             | ❌             | - |
| Step (Wizard\Step)  | ✅         | ❌             | ❌             | - |

## Metodi principali per le icone

### `icon()`

Il metodo `icon()` è tipicamente supportato dai componenti di layout e contenitore:

```php
Forms\Components\Section::make('Informazioni Personali')
    ->icon('heroicon-o-user')
    ->schema([
        // componenti interni...
    ])
```

### `prefixIcon()` e `suffixIcon()`

Questi metodi sono supportati principalmente dai componenti di input:

```php
Forms\Components\TextInput::make('email')
    ->prefixIcon('heroicon-o-envelope')
    ->suffixIcon('heroicon-o-check-circle')
```

## Alternative per componenti senza supporto diretto

Per componenti che non supportano direttamente le icone (come FileUpload), ecco alcune alternative:

### 1. Racchiudere in una Section

```php
Forms\Components\Section::make('Documenti')
    ->icon('heroicon-o-document-text')
    ->schema([
        Forms\Components\FileUpload::make('document')
            // configurazione...
    ])
```

### 2. Usare uno slot personalizzato (per componenti che supportano gli slot)

```php
Forms\Components\FileUpload::make('document')
    ->label(function () {
        return new HtmlString('
            <div class="flex items-center gap-x-2">
                <x-filament::icon 
                    name="heroicon-o-document-text" 
                    class="h-5 w-5 text-gray-500" 
                />
                <span>Documento</span>
            </div>
        ');
    })
```

## Errori comuni

### 1. Usare `prefixIcon()` su FileUpload

```php
// ❌ QUESTO CAUSERÀ UN ERRORE
Forms\Components\FileUpload::make('document')
    ->prefixIcon('heroicon-o-document-text')
    // BadMethodCallException: Method Filament\Forms\Components\FileUpload::prefixIcon does not exist.
```

### 2. Usare `icon()` su TextInput

```php
// ❌ QUESTO CAUSERÀ UN ERRORE
Forms\Components\TextInput::make('name')
    ->icon('heroicon-o-user')
    // BadMethodCallException: Method Filament\Forms\Components\TextInput::icon does not exist.
```

## Best Practices

1. **Verificare la documentazione** - Controllare sempre la documentazione ufficiale Filament per il componente specifico
2. **Testare incrementalmente** - Aggiungere un componente alla volta e verificare che funzioni
3. **Utilizzare IDE con autocompletamento** - Gli IDE come PhpStorm possono mostrare i metodi disponibili

## Riferimenti

- [Documentazione Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/overview)
- [API Components Filament](components-api.md)

> **NOTA**: Questa documentazione segue la regola di centralizzare tutte le documentazioni UI nel modulo UI con collegamenti bidirezionali dagli altri moduli.
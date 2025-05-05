# Modulo UI

## Introduzione
Il modulo UI gestisce l'interfaccia utente del sistema, fornendo componenti riutilizzabili, layout e temi. Si integra con Filament, Livewire e Volt per offrire un'esperienza utente coerente e moderna.

## Indice
- [Architettura e Componenti](#architettura-e-componenti)
- [Filament](#filament)
- [Livewire e Volt](#livewire-e-volt)
- [Best Practices](#best-practices)
- [Documentazione Tecnica](#documentazione-tecnica)
- [Note Importanti](#note-importanti)
- [Collegamenti Bidirezionali](#collegamenti-bidirezionali)
- [Documentazione](#documentazione)
- [Dipendenze](#dipendenze)
- [Utilizzo](#utilizzo)

## Architettura e Componenti
- Componenti Base
- Layout System
- Theme System
- Form System

## Filament
- Resource Management
- Form Builder
- UI Components

## Livewire e Volt
- Component System
- Form Handling
- UI Updates

## Best Practices
- Component Design
- State Management
- Performance

## Documentazione Tecnica
- [Roadmap](roadmap.md)
- [Bottlenecks](bottlenecks.md)
- [Best Practices](BEST-PRACTICES.md)
- [Testing](testing.md)

## Note Importanti
1. Tutti i componenti devono estendere le classi base di Xot
2. Seguire le convenzioni di naming
3. Utilizzare i trait forniti
4. Documentare il codice

## Collegamenti Bidirezionali
- [Modulo User](../User/docs/README.md)
- [Modulo Lang](../Lang/docs/README.md)
- [Modulo Cms](../Cms/docs/README.md)

## Documentazione
- [Guida Iniziale](getting-started.md)
- [Componenti](components.md)
- [Layout](layout.md)
- [Temi](themes.md)

## Dipendenze
- Laravel Framework
- Filament
- Livewire
- Volt
- Folio
- Tailwind CSS
- Alpine.js

## Utilizzo
```php
// Esempio di utilizzo componente base
use Modules\UI\Components\BaseComponent;

class MyComponent extends BaseComponent
{
    public function render()
    {
        return view('ui::components.my-component');
    }
}

// Esempio di utilizzo layout
use Modules\UI\Layouts\BaseLayout;

class MyLayout extends BaseLayout
{
    public function render()
    {
        return view('ui::layouts.my-layout');
    }
}
```

## Struttura del Modulo

```
Modules/UI/
├── app/
│   ├── Models/
│   │   └── Theme.php
│   ├── Providers/
│   │   ├── UIServiceProvider.php
│   │   └── UIBaseServiceProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── ThemeResource.php
│   │   ├── Widgets/
│   │   │   └── ThemePreviewWidget.php
│   │   └── Pages/
│   │       └── ThemeManager.php
│   └── Http/
│       └── Controllers/
│           └── ThemeController.php
├── config/
│   └── ui.php
├── resources/
│   ├── css/
│   │   ├── app.css
│   │   └── themes/
│   ├── js/
│   │   ├── app.js
│   │   └── components/
│   └── views/
│       ├── components/
│       │   ├── ui/
│       │   │   ├── button.blade.php
│       │   │   ├── card.blade.php
│       │   │   └── form.blade.php
│       │   └── layout/
│       │       ├── app.blade.php
│       │       └── guest.blade.php
│       └── themes/
│           ├── light/
│           └── dark/
└── public/
    ├── css/
    ├── js/
    └── images/
```

## Componenti UI

### 1. Componenti Base
```php
// resources/views/components/ui/button.blade.php
@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'label' => null
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "btn btn-{$variant} btn-{$size}"
    ]) }}
>
    @if($icon)
        <x-dynamic-component :component="'heroicon-o-'.$icon" class="w-5 h-5" />
    @endif
    @if($label)
        <span>{{ $label }}</span>
    @endif
    {{ $slot }}
</button>
```

### 2. Utilizzo in Filament
```php
// ❌ NON FARE QUESTO
use Filament\Forms\Components\TextInput;

TextInput::make('name')
    ->label('Nome')

// ✅ FARE QUESTO
use Modules\UI\Filament\Components\XotBaseTextInput;

XotBaseTextInput::make('name')
    ->label(['label' => 'Nome'])
```

### 3. Layout
```php
// resources/views/components/layout/app.blade.php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
            {{ $navigation }}
        </nav>

        <main>
            {{ $slot }}
        </main>

        <footer class="bg-white border-t border-gray-100">
            {{ $footer }}
        </footer>
    </div>
</body>
</html>
```

## Best Practices

### 1. Componenti
- Utilizzare componenti Blade
- Seguire BEM per il CSS
- Implementare dark mode
- Supportare RTL

### 2. Filament
```php
// ❌ NON FARE QUESTO
use Filament\Forms\Components\TextInput;

class UserResource extends Resource
{
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
        ]);
    }
}

// ✅ FARE QUESTO
use Modules\UI\Filament\Components\XotBaseTextInput;

class UserResource extends XotBaseResource
{
    public static function form(Form $form): Form
    {
        return $form->schema([
            XotBaseTextInput::make('name')
        ]);
    }
}
```

### 3. Temi
```php
// ❌ NON FARE QUESTO
<div class="bg-white text-black">

// ✅ FARE QUESTO
<div class="bg-background text-foreground">
```

## Dipendenze Principali

### Moduli
- **User**: Componenti autenticazione
- **Xot**: Componenti base
- **Lang**: Traduzioni UI

### Pacchetti
- Laravel Framework
- Filament
- Livewire
- Tailwind CSS

## Roadmap

### Prossime Feature
1. Nuovi componenti UI
2. Miglioramento temi
3. Ottimizzazione performance

### Miglioramenti Pianificati
1. Refactoring componenti
2. Miglioramento accessibilità
3. Ottimizzazione assets

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Stili non applicati
2. Componenti non renderizzati
3. Temi non funzionanti

### Soluzioni
1. Verifica assets
2. Controlla cache
3. Consulta documentazione

## Riferimenti

### Documentazione
- [Laravel Blade](https://laravel.com/docs/12.x/blade)
- [Filament](https://filamentphp.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)

### Collegamenti Interni
- [User Module](../User/docs/README.md)
- [Xot Module](../Xot/docs/README.md)
- [Lang Module](../Lang/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Componenti base
- Sistema temi
- Layout responsive

#### Changed
- Miglioramento performance
- Ottimizzazione assets
- Refactoring componenti

#### Fixed
- Bug stili
- Problemi layout
- Errori temi 
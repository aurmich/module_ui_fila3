<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 41f976e (.)
# Correzioni PHPStan Livello 7 - Modulo UI
=======
# Correzioni PHPStan - Modulo UI
>>>>>>> f89ff0a (.)

Questo documento traccia gli errori PHPStan identificati nel modulo UI e le relative soluzioni implementate.

## Errori Risolti - Gennaio 2025

### 1. Property Access Issues - IconStateSplitColumn

**Problema**: Accesso a proprietà su oggetti potenzialmente null.

**Errore PHPStan**:

```text
Cannot access property $id on Illuminate\Database\Eloquent\Model|null.
```

**Soluzione Implementata**:

1. Utilizzato l'operatore null-safe `?->` per accesso sicuro alle proprietà
2. Fornito valore di fallback appropriato

```php
// Prima (non sicuro)
->body('Record ID: ' . $record->id)

// Dopo (sicuro)
->body('Record ID: ' . ($record?->id ?? 'N/A'))
```

<<<<<<< HEAD
2. Aggiunti controlli `method_exists` e `isset` prima di chiamare metodi o accedere a proprietà sull'oggetto `$livewire`:

```php
if ($livewire) {
    // Use isset to safely check if the property exists (for magic properties)
    if (isset($livewire->layoutView)) {
        $livewire->layoutView = $newLayout;
    }
    
    // These methods should be available on Filament components
    if (method_exists($livewire, 'dispatch')) {
        $livewire->dispatch('$refresh');
        $livewire->dispatch('refreshTable');
    }
    
    if (method_exists($livewire, 'resetTable')) {
        $livewire->resetTable();
=======
# PHPStan Fixes for UI Module

## Overview

This document provides solutions for common PHPStan errors encountered in the UI module of Laraxot projects. The UI module has specific requirements and patterns that must be followed to maintain code quality.

## PHPStan Configuration

### 1. **Execution Rules**
- **ALWAYS** run from `/laravel` directory
- **NEVER** use `php artisan test:phpstan`
- **ALWAYS** use `./vendor/bin/phpstan analyze Modules/UI --level=9`

### 2. **Module-Specific Configuration**
```neon
# phpstan.neon.dist
parameters:
    level: 9
    paths:
        - Modules/UI
    checkMissingIterableValueType: true
    checkGenericClassInNonGenericObjectType: true
    checkMissingCallableSignature: true
    checkUnusedFunctionParameters: true
```

## Common Error Fixes

### 1. **Component Class Issues**

#### Problem
```
Class UI\Component not found
```

#### Solution
Ensure proper namespace and inheritance:

```php
<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $variant = 'primary',
        public bool $disabled = false,
    ) {
    }

    public function render()
    {
        return view('ui::components.ui.button');
>>>>>>> 20c12a7 (.)
    }
}
```

<<<<<<< HEAD
Questo approccio è più robusto e previene errori a runtime quando l'oggetto `$livewire` non ha i metodi o le proprietà previste.
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 8a76661 (.)
=======
>>>>>>> 64e34f5 (.)
>>>>>>> 41f976e (.)
# UI Module - PHPStan Level 7 Fixes - Gennaio 2025
=======
### 2. Mixed Type Casting - RadioCollection

**Problema**: Errori di casting da `mixed` a `string` nel componente RadioCollection.

**Errore PHPStan**:

```text
Cannot cast mixed to string.
```

**Stato**: Analizzato - I file del modulo UI mostrano già pattern di type safety implementati

**Pattern Applicato**:

```php
// Pattern standard per casting sicuro
$value = $mixedValue;
$stringValue = is_string($value) ? $value : (string) $value;
```

## Componenti Filament Personalizzati
>>>>>>> f89ff0a (.)

### RadioCollection Component

Il componente `RadioCollection` è un componente Filament personalizzato che:

1. Estende le funzionalità base di Filament
2. Implementa type safety per i valori mixed
3. Fornisce interfaccia user-friendly per selezioni radio

### IconStateSplitColumn Component

Il componente `IconStateSplitColumn` è una colonna tabella personalizzata che:

1. Gestisce stati con icone
2. Implementa azioni di stato sicure
3. Utilizza null-safe operators per robustezza

## Pattern Applicati

### 1. Null-Safe Property Access

```php
// Pattern per accesso sicuro alle proprietà
$value = $model?->property ?? 'default_value';
```

### 2. Type-Safe Casting

```php
// Pattern per casting sicuro di tipi mixed
$safeValue = is_string($mixedValue) ? $mixedValue : (string) $mixedValue;
```

### 3. Defensive Programming

```php
// Pattern per programmazione difensiva
if ($record !== null && property_exists($record, 'id')) {
    $id = $record->id;
} else {
    $id = 'N/A';
}
```

## Compliance Laraxot

- Tutti i componenti seguono i pattern del framework Laraxot
- Utilizzato XotBase classes dove appropriato
- Mantenuto naming conventions e struttura del framework

## Stato Attuale

✅ **Risolti**: Property access issues con null-safe operators
✅ **Analizzati**: Mixed type casting (già implementati pattern sicuri)
✅ **Testati**: Componenti funzionano correttamente con le modifiche

## Note per Sviluppatori

<<<<<<< HEAD
---
*Ultimo aggiornamento: Gennaio 2025*
*Stato: 🔄 In Corso - ~2 errori PHPStan rimanenti*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7da17b2 (.)
=======
>>>>>>> 8a76661 (.)
=======
>>>>>>> 64e34f5 (.)
>>>>>>> 41f976e (.)
=======
### Componenti Filament Personalizzati

1. **Null Safety**: Sempre utilizzare null-safe operators quando si accede a proprietà di modelli
2. **Type Casting**: Validare i tipi prima del casting, specialmente per valori mixed
3. **Error Handling**: Fornire sempre valori di fallback appropriati

### Colonne Tabella

1. **Record Access**: I record possono essere null, sempre verificare
2. **Property Access**: Utilizzare `?->` per accesso sicuro
3. **Display Values**: Fornire valori di default per casi edge

### Form Components

1. **Value Handling**: Gestire correttamente valori mixed dai form
2. **Type Safety**: Implementare validazione dei tipi
3. **User Experience**: Mantenere UX fluida anche con errori di tipo

## Raccomandazioni Future

### Performance

1. **Lazy Loading**: Considerare lazy loading per componenti complessi
2. **Caching**: Implementare caching per operazioni costose
3. **Optimization**: Ottimizzare query per componenti che accedono al database

### Maintainability

1. **Documentation**: Documentare tutti i componenti personalizzati
2. **Testing**: Implementare test per componenti critici
3. **Type Safety**: Continuare a migliorare la type safety

### User Experience

1. **Error States**: Gestire gracefully gli stati di errore
2. **Loading States**: Implementare stati di caricamento appropriati
3. **Accessibility**: Assicurare accessibilità per tutti i componenti
>>>>>>> f89ff0a (.)
=======
### 2. **View Path Issues**

#### Problem
```
View [ui::components.ui.button] not found
```

#### Solution
Ensure view files are in the correct location:

```
Modules/UI/resources/views/components/ui/button.blade.php
```

### 3. **Component Property Access**

#### Problem
```
Access to an undefined property $variant of class Button
```

#### Solution
Add proper PHPDoc annotations:

```php
/**
 * Button component.
 *
 * @property string $variant
 * @property bool $disabled
 */
class Button extends Component
{
    public function __construct(
        public string $variant = 'primary',
        public bool $disabled = false,
    ) {
    }
}
```

### 4. **Missing Return Types**

#### Problem
```
Method render() does not have a return type specified
```

#### Solution
Add explicit return types:

```php
public function render(): \Illuminate\Contracts\View\View
{
    return view('ui::components.ui.button');
}
```

## Component Development Patterns

### 1. **Basic Component Structure**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;

/**
 * Basic UI component.
 *
 * @property string $variant
 * @property bool $disabled
 * @property string|null $id
 * @property string|null $class
 */
class BasicComponent extends Component
{
    public function __construct(
        public string $variant = 'default',
        public bool $disabled = false,
        public ?string $id = null,
        public ?string $class = null,
    ) {
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('ui::components.ui.basic-component');
    }
}
```

### 2. **Component with Slots**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;

/**
 * Card component with slots.
 *
 * @property string $variant
 * @property string|null $header
 * @property string|null $footer
 */
class Card extends Component
{
    public function __construct(
        public string $variant = 'default',
        public ?string $header = null,
        public ?string $footer = null,
    ) {
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('ui::components.ui.card');
    }
}
```

### 3. **Interactive Component**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;

/**
 * Interactive component with Alpine.js.
 *
 * @property string $variant
 * @property bool $disabled
 * @property array<string, mixed> $data
 */
class InteractiveComponent extends Component
{
    public function __construct(
        public string $variant = 'default',
        public bool $disabled = false,
        public array $data = [],
    ) {
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('ui::components.ui.interactive-component');
    }
}
```

## Blade Template Standards

### 1. **Component Template Structure**
```blade
{{--
/**
 * Button component.
 *
 * @param string $variant Button variant (primary, secondary, danger)
 * @param bool $disabled Whether the button is disabled
 * @param string|null $id Optional ID for the button
 * @param string|null $class Additional classes
 *
 * @example
 * <x-ui::ui.button variant="primary">
 *    Save changes
 * </x-ui::ui.button>
 */
--}}

<button
    {{ $attributes->merge([
        'type' => $type ?? 'button',
        'class' => 'btn btn-' . ($variant ?? 'primary') . ($disabled ? ' disabled' : '') . ' ' . ($class ?? ''),
        'id' => $id ?? null,
        'disabled' => $disabled,
    ]) }}
>
    {{ $slot }}
</button>
```

### 2. **Slot Usage**
```blade
{{-- Component with named slots --}}
<div class="card card-{{ $variant ?? 'default' }}">
    @if($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endif
    
    <div class="card-body">
        {{ $slot }}
    </div>
    
    @if($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
```

### 3. **Attribute Merging**
```blade
{{-- Proper attribute merging --}}
<div
    {{ $attributes->merge([
        'class' => 'component ' . ($variant ?? 'default'),
        'id' => $id ?? null,
    ])->filter(fn($value, $key) => $key !== 'variant') }}
>
    {{ $slot }}
</div>
```

## Service and Facade Patterns

### 1. **UI Service Class**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\Services;

/**
 * UI service for common operations.
 */
class UIService
{
    /**
     * Generate component classes.
     *
     * @param string $baseClass
     * @param array<string, mixed> $variants
     * @param string|null $customClass
     * @return string
     */
    public function generateClasses(string $baseClass, array $variants, ?string $customClass = null): string
    {
        $classes = [$baseClass];
        
        foreach ($variants as $key => $value) {
            if ($value) {
                $classes[] = $baseClass . '-' . $key;
            }
        }
        
        if ($customClass) {
            $classes[] = $customClass;
        }
        
        return implode(' ', $classes);
    }
}
```

### 2. **UI Facade**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * UI facade.
 *
 * @method static string generateClasses(string $baseClass, array $variants, ?string $customClass = null)
 * @method static string getTheme()
 * @method static void setTheme(string $theme)
 */
class UI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ui';
    }
}
```

## Testing Standards

### 1. **Component Testing**
```php
<?php

declare(strict_types=1);

namespace Tests\Feature\Modules\UI;

use Tests\TestCase;
use Modules\UI\View\Components\Button;

class ButtonComponentTest extends TestCase
{
    public function test_button_renders_correctly(): void
    {
        $this->blade('<x-ui::ui.button>Click me</x-ui::ui.button>')
            ->assertSee('Click me')
            ->assertSee('btn btn-primary');
    }

    public function test_button_variants(): void
    {
        $this->blade('<x-ui::ui.button variant="danger">Delete</x-ui::ui.button>')
            ->assertSee('btn-danger');
    }

    public function test_button_disabled_state(): void
    {
        $this->blade('<x-ui::ui.button disabled>Disabled</x-ui::ui.button>')
            ->assertSee('disabled');
    }
}
```

### 2. **Service Testing**
```php
<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\UI;

use Tests\TestCase;
use Modules\UI\Services\UIService;

class UIServiceTest extends TestCase
{
    private UIService $uiService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->uiService = new UIService();
    }

    public function test_generate_classes(): void
    {
        $classes = $this->uiService->generateClasses('btn', [
            'primary' => true,
            'large' => true,
        ], 'custom-class');

        $this->assertEquals('btn btn-primary btn-large custom-class', $classes);
    }
}
```

## Common Anti-Patterns

### 1. **Direct View Rendering**
```php
// ❌ WRONG
public function render()
{
    return view('components.button');  // Missing namespace
}

// ✅ CORRECT
public function render(): \Illuminate\Contracts\View\View
{
    return view('ui::components.ui.button');
}
```

### 2. **Missing Type Declarations**
```php
// ❌ WRONG
public function __construct($variant, $disabled)
{
    $this->variant = $variant;
    $this->disabled = $disabled;
}

// ✅ CORRECT
public function __construct(
    public string $variant,
    public bool $disabled,
) {
}
```

### 3. **Improper Attribute Handling**
```blade
{{-- ❌ WRONG --}}
<button class="btn {{ $class }}">
    {{ $slot }}
</button>

{{-- ✅ CORRECT --}}
<button {{ $attributes->merge(['class' => 'btn ' . ($class ?? '')]) }}>
    {{ $slot }}
</button>
```

## Performance Considerations

### 1. **Component Caching**
```php
// Cache component instances
protected static array $cachedComponents = [];

public static function make(string $variant = 'default'): static
{
    $key = $variant;
    
    if (!isset(static::$cachedComponents[$key])) {
        static::$cachedComponents[$key] = new static($variant);
    }
    
    return static::$cachedComponents[$key];
}
```

### 2. **Lazy Loading**
```php
// Load components only when needed
public function render(): \Illuminate\Contracts\View\View
{
    if (!isset($this->view)) {
        $this->view = view('ui::components.ui.large-component');
    }
    
    return $this->view;
}
```

## Documentation Requirements

### 1. **Component Documentation**
Every UI component must include:

- **Purpose**: What the component does
- **Props**: Available properties and types
- **Examples**: Usage examples
- **Accessibility**: Accessibility considerations
- **Testing**: Testing guidelines

### 2. **Documentation Location**
- **Component docs**: `Modules/UI/docs/components.md`
- **Usage examples**: Component files
- **API reference**: PHPDoc comments
- **Tutorials**: Step-by-step guides

## Links to Related Documentation

- [UI Components](./components.md)
- [Design System](./design-system.md)
- [Testing Guidelines](./testing.md)
- [Performance Optimization](./performance.md)
- [Code Quality Standards](../../Xot/docs/code-quality.md)

---

*PHPStan Fixes for UI Module - Ensuring Code Quality in UI Components*
>>>>>>> 20c12a7 (.)

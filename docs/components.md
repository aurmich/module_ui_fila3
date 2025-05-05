# Componenti UI

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
* [components.md](laravel/Modules/UI/docs/components.md)
* [components.md](laravel/Modules/UI/docs/themes/components.md)
* [components.md](laravel/Modules/Cms/docs/components.md)
* [components.md](laravel/Themes/One/docs/components.md)


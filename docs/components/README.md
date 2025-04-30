# Componenti UI

Questo documento contiene la documentazione dettagliata dei componenti UI.

## Struttura dei Componenti

### Base Components
- `XotBaseButton`: Pulsante base con varianti
- `XotBaseInput`: Campo input con validazione
- `XotBaseSelect`: Select con opzioni
- `XotBaseCheckbox`: Checkbox con label
- `XotBaseRadio`: Radio button con gruppo

### Layout Components
- `XotBaseCard`: Card con header e footer
- `XotBaseModal`: Modal con animazioni
- `XotBaseTabs`: Tabs con contenuto
- `XotBaseAccordion`: Accordion espandibile
- `XotBaseGrid`: Grid system responsive

### Data Components
- `XotBaseTable`: Tabella con sorting e pagination
- `XotBaseList`: Lista con items
- `XotBaseTimeline`: Timeline con eventi
- `XotBaseCalendar`: Calendario con eventi
- `XotBaseChart`: Grafici con dati

## Utilizzo

### Esempio Base
```php
<x-ui::button 
    type="submit" 
    color="primary" 
    size="lg"
    :disabled="$isDisabled"
>
    {{ $slot }}
</x-ui::button>
```

### Props
```php
class XotBaseButton extends Component
{
    public function __construct(
        public string $type = 'button',
        public ?string $color = null,
        public ?string $size = null,
        public bool $disabled = false,
        public ?string $icon = null,
        public ?string $loading = null
    ) {}
}
```

### Slots
```php
<x-ui::card>
    <x-slot name="header">
        <h2>Titolo</h2>
    </x-slot>
    
    <p>Contenuto</p>
    
    <x-slot name="footer">
        <x-ui::button>Salva</x-ui::button>
    </x-slot>
</x-ui::card>
```

## Stili

### Tailwind
```css
@layer components {
    .btn {
        @apply px-4 py-2 rounded-md font-medium transition-colors;
    }
    
    .btn-primary {
        @apply bg-blue-600 text-white hover:bg-blue-700;
    }
    
    .btn-secondary {
        @apply bg-gray-600 text-white hover:bg-gray-700;
    }
}
```

### Variabili CSS
```css
:root {
    --primary-color: #3b82f6;
    --secondary-color: #4b5563;
    --success-color: #10b981;
    --danger-color: #ef4444;
    --warning-color: #f59e0b;
    --info-color: #3b82f6;
}
```

## Accessibilità

### ARIA
```php
class XotBaseButton extends Component
{
    public function getAriaAttributes(): array
    {
        return [
            'aria-disabled' => $this->disabled,
            'aria-busy' => $this->loading,
            'aria-label' => $this->getAriaLabel(),
        ];
    }
}
```

### Keyboard Navigation
```php
class XotBaseModal extends Component
{
    public function mount(): void
    {
        $this->setupKeyboardNavigation();
    }
    
    private function setupKeyboardNavigation(): void
    {
        $this->dispatchBrowserEvent('keydown', [
            'key' => 'Escape',
            'handler' => fn() => $this->close(),
        ]);
    }
}
```

## Performance

### Lazy Loading
```php
class XotBaseImage extends Component
{
    public function render(): View
    {
        return view('ui::components.image', [
            'src' => $this->src,
            'loading' => 'lazy',
            'width' => $this->width,
            'height' => $this->height,
        ]);
    }
}
```

### Code Splitting
```javascript
// resources/js/components/Chart.js
import { lazy } from 'react';

const Chart = lazy(() => import('./Chart'));

export default Chart;
```

## Testing

### Unit Tests
```php
class ButtonTest extends TestCase
{
    /** @test */
    public function it_renders_correctly(): void
    {
        $view = $this->blade(
            '<x-ui::button>Test</x-ui::button>'
        );
        
        $view->assertSee('Test');
    }
}
```

### Browser Tests
```php
class ButtonBrowserTest extends DuskTestCase
{
    /** @test */
    public function it_handles_click(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                   ->click('@submit-button')
                   ->assertSee('Success');
        });
    }
}
``` 
# Standard UI

Questo documento contiene gli standard specifici per il modulo UI.

## Componenti

### Nomenclatura
- Nome in PascalCase
- Prefisso `XotBase` per le classi base
- Suffisso `Component` per i componenti Blade
- Suffisso `Widget` per i widget Filament

### Struttura
```php
namespace Modules\UI\app\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class XotBaseButton extends Component
{
    public function __construct(
        public string $type = 'button',
        public ?string $color = null,
        public ?string $size = null,
        public bool $disabled = false
    ) {}

    public function render(): View
    {
        return view('ui::components.button');
    }
}
```

### Blade
- Utilizzare componenti Blade per tutto
- Evitare direttive personalizzate
- Mantenere la logica nel componente PHP
- Utilizzare slots per contenuto dinamico

### Stili
- Utilizzare Tailwind CSS
- Evitare CSS personalizzato
- Utilizzare variabili CSS per colori e dimensioni
- Mantenere la coerenza visiva

## Widgets Filament

### Nomenclatura
- Nome in PascalCase
- Suffisso `Widget`
- Prefisso `XotBase` per le classi base

### Struttura
```php
namespace Modules\UI\app\Filament\Widgets;

use Filament\Widgets\Widget;

class XotBaseStatsOverview extends Widget
{
    protected static string $view = 'ui::widgets.stats-overview';
    
    protected function getViewData(): array
    {
        return [
            'stats' => $this->getStats(),
        ];
    }
}
```

### Performance
- Ottimizzare le query
- Utilizzare cache quando appropriato
- Evitare N+1 query
- Lazy loading per dati pesanti

## Temi

### Struttura
- Un tema per tenant
- Estensione del tema base
- Override solo delle variabili necessarie
- Documentazione delle variabili disponibili

### Personalizzazione
- Utilizzare variabili CSS
- Mantenere la coerenza
- Documentare le personalizzazioni
- Testare su tutti i dispositivi

## Accessibilità

### Requisiti
- WCAG 2.1 AA compliance
- Supporto screen reader
- Navigazione da tastiera
- Contrasto sufficiente

### Testing
- Test automatici
- Test manuali
- Test con screen reader
- Test su diversi dispositivi

## Performance Frontend

### Ottimizzazioni
- Lazy loading immagini
- Code splitting
- Minificazione assets
- Cache browser

### Monitoring
- Core Web Vitals
- Performance budget
- Errori JavaScript
- Tempi di caricamento 
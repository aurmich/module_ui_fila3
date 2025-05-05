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
## Collegamenti tra versioni di README.md
* [README.md](bashscripts/docs/README.md)
* [README.md](bashscripts/docs/it/README.md)
* [README.md](docs/laravel-app/phpstan/README.md)
* [README.md](docs/laravel-app/README.md)
* [README.md](docs/moduli/struttura/README.md)
* [README.md](docs/moduli/README.md)
* [README.md](docs/moduli/manutenzione/README.md)
* [README.md](docs/moduli/core/README.md)
* [README.md](docs/moduli/installati/README.md)
* [README.md](docs/moduli/comandi/README.md)
* [README.md](docs/phpstan/README.md)
* [README.md](docs/README.md)
* [README.md](docs/module-links/README.md)
* [README.md](docs/troubleshooting/git-conflicts/README.md)
* [README.md](docs/tecnico/laraxot/README.md)
* [README.md](docs/modules/README.md)
* [README.md](docs/conventions/README.md)
* [README.md](docs/amministrazione/backup/README.md)
* [README.md](docs/amministrazione/monitoraggio/README.md)
* [README.md](docs/amministrazione/deployment/README.md)
* [README.md](docs/translations/README.md)
* [README.md](docs/roadmap/README.md)
* [README.md](docs/ide/cursor/README.md)
* [README.md](docs/implementazione/api/README.md)
* [README.md](docs/implementazione/testing/README.md)
* [README.md](docs/implementazione/pazienti/README.md)
* [README.md](docs/implementazione/ui/README.md)
* [README.md](docs/implementazione/dental/README.md)
* [README.md](docs/implementazione/core/README.md)
* [README.md](docs/implementazione/reporting/README.md)
* [README.md](docs/implementazione/isee/README.md)
* [README.md](docs/it/README.md)
* [README.md](laravel/vendor/mockery/mockery/docs/README.md)
* [README.md](laravel/Modules/Chart/docs/README.md)
* [README.md](laravel/Modules/Reporting/docs/README.md)
* [README.md](laravel/Modules/Gdpr/docs/phpstan/README.md)
* [README.md](laravel/Modules/Gdpr/docs/README.md)
* [README.md](laravel/Modules/Notify/docs/phpstan/README.md)
* [README.md](laravel/Modules/Notify/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/filament/README.md)
* [README.md](laravel/Modules/Xot/docs/phpstan/README.md)
* [README.md](laravel/Modules/Xot/docs/exceptions/README.md)
* [README.md](laravel/Modules/Xot/docs/README.md)
* [README.md](laravel/Modules/Xot/docs/standards/README.md)
* [README.md](laravel/Modules/Xot/docs/conventions/README.md)
* [README.md](laravel/Modules/Xot/docs/development/README.md)
* [README.md](laravel/Modules/Dental/docs/README.md)
* [README.md](laravel/Modules/User/docs/phpstan/README.md)
* [README.md](laravel/Modules/User/docs/README.md)
* [README.md](laravel/Modules/User/resources/views/docs/README.md)
* [README.md](laravel/Modules/UI/docs/phpstan/README.md)
* [README.md](laravel/Modules/UI/docs/README.md)
* [README.md](laravel/Modules/UI/docs/standards/README.md)
* [README.md](laravel/Modules/UI/docs/themes/README.md)
* [README.md](laravel/Modules/UI/docs/components/README.md)
* [README.md](laravel/Modules/Lang/docs/phpstan/README.md)
* [README.md](laravel/Modules/Lang/docs/README.md)
* [README.md](laravel/Modules/Job/docs/phpstan/README.md)
* [README.md](laravel/Modules/Job/docs/README.md)
* [README.md](laravel/Modules/Media/docs/phpstan/README.md)
* [README.md](laravel/Modules/Media/docs/README.md)
* [README.md](laravel/Modules/Tenant/docs/phpstan/README.md)
* [README.md](laravel/Modules/Tenant/docs/README.md)
* [README.md](laravel/Modules/Activity/docs/phpstan/README.md)
* [README.md](laravel/Modules/Activity/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/README.md)
* [README.md](laravel/Modules/Patient/docs/standards/README.md)
* [README.md](laravel/Modules/Patient/docs/value-objects/README.md)
* [README.md](laravel/Modules/Cms/docs/blocks/README.md)
* [README.md](laravel/Modules/Cms/docs/README.md)
* [README.md](laravel/Modules/Cms/docs/standards/README.md)
* [README.md](laravel/Modules/Cms/docs/content/README.md)
* [README.md](laravel/Modules/Cms/docs/frontoffice/README.md)
* [README.md](laravel/Modules/Cms/docs/components/README.md)
* [README.md](laravel/Themes/Two/docs/README.md)
* [README.md](laravel/Themes/One/docs/README.md)


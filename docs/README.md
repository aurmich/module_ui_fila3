<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8727c5b (.)
# Modulo UI - Documentazione Consolidata
=======
# 🎨 **UI Module** - Sistema Avanzato Componenti Interfaccia
>>>>>>> 566e8fe (.)

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Blade Components](https://img.shields.io/badge/Blade-Components%20Ready-orange.svg)](https://laravel.com/docs/blade)
[![Design System](https://img.shields.io/badge/Design-System%20Ready-purple.svg)](https://designsystem.digital.gov/)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-97%25-brightgreen.svg)](https://github.com/laraxot/ui-module)

<<<<<<< HEAD
## 📚 Documentazione Principale
<<<<<<< HEAD
=======
> **🚀 Modulo UI**: Sistema completo di componenti Blade, widget Filament e design system con traduzioni automatiche e layout responsive.
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 566e8fe (.)

## 📋 **Panoramica**

Il modulo **UI** è il cuore dell'interfaccia utente dell'applicazione, fornendo:

- 🧩 **Componenti Blade** - Componenti riutilizzabili e modulari
- 🎨 **Widget Filament** - Widget personalizzati per admin panel
- 📱 **Layout Responsive** - Sistema layout adattivo
- 🌐 **Traduzioni Automatiche** - Sistema traduzioni integrato
- 🎯 **Design System** - Sistema design coerente
- ⚡ **Performance Ottimizzata** - Componenti ottimizzati per velocità
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)

### Fix Implementati
- [Fix Traduzioni Opening Hours Field](opening_hours_translation_fix.md) - **REGOLA CRITICA**: Sincronizzazione obbligatoria tra lingue IT/EN
- [Fix Traduzioni Opening Hours](opening_hours_translation_improvement.md) - Miglioramento traduzioni orari

## Regole Critiche

- [Analisi TableLayoutEnum](table_layout_enum_analysis.md) - **NUOVO**: Documentazione completa enum layout tabelle

## ⚡ **Funzionalità Core**

### 🧩 **Blade Components**
### ❌ MAI usare ->label()
```php
// Componente riutilizzabile
<x-ui.card>
    <x-slot:header>
        <h2>Dashboard</h2>
    </x-slot>
    
    <x-ui.button variant="primary">
        Crea Nuovo
    </x-ui.button>
</x-ui.card>

// Componente con props tipizzate
<x-ui.data-table 
    :data="$users" 
    :columns="$columns"
    layout="grid"
    responsive="true"
/>
```

### 🎨 **Filament Widgets**
```php
// Widget calendario personalizzato
class UserCalendarWidget extends XotBaseWidget
{
    protected static string $view = 'ui::filament.widgets.user-calendar';
    
    public function getViewData(): array
    {
        return [
            'events' => $this->getUserEvents(),
            'layout' => TableLayoutEnum::GRID,
        ];
    }
}
```

### 📱 **TableLayoutEnum System**
```php
// Sistema layout tabelle responsive
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case LIST = 'list';
    case GRID = 'grid';
    
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
### Sincronizzazione Lingue
- **TUTTI** i file `lang/en/` devono avere le stesse voci di `lang/it/`
- **SEMPRE** confrontare file IT e EN prima di modifiche
- **SEMPRE** aggiungere nuove voci in entrambe le lingue
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)

### Struttura Traduzioni
- Struttura espansa obbligatoria per tutti i campi
- Sintassi moderna `[]` invece di `array()`
- `declare(strict_types=1);` sempre presente
- `tooltip` e `helper_text` per ogni campo

## Componenti UI

### Posizionamento
- **SEMPRE** in `Modules/UI/resources/views/components/ui/`
- **MAI** nella root `resources/views/components/`

### Convenzioni
- Nomi file in minuscolo
- PHPDoc completo per ogni componente
- Organizzazione in sottocartelle logiche

### Convenzioni
- Nomi file in minuscolo
- PHPDoc completo per ogni componente
- Organizzazione in sottocartelle logiche

## Enums e Utilities

### TableLayoutEnum
- **Scopo**: Gestione layout tabelle Filament (lista/griglia)
- **Funzionalità**: Toggle responsive, traduzioni, colori, icone
- **Interfacce**: HasColor, HasIcon, HasLabel
- **Pattern**: Strategy Pattern per colonne dinamiche
- **Implementazione**: TransTrait con transClass()

### Utilizzo TableLayoutEnum
```php
use Modules\UI\Enums\TableLayoutEnum;

class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout = TableLayoutEnum::LIST;
    
    public function getTableContentGrid(): array
    {
        return match($this) {
            self::LIST => ['md' => 1],
            self::GRID => ['md' => 2, 'lg' => 3],
        };
    }
}
```

## 🎯 **Stato Qualità - Gennaio 2025**
## Proprietà fondamentali del ServiceProvider (Laraxot/PTVX)

Tutti i provider dei moduli che estendono XotBaseServiceProvider **devono** dichiarare:
- `protected string $module_dir = __DIR__;`
- `protected string $module_ns = __NAMESPACE__;`
- `public string $name = 'UI';`

Queste proprietà sono necessarie per:
- La risoluzione automatica dei path delle risorse
- Il corretto namespace per autoloading e publish
- L'identificazione del modulo nelle operazioni di asset publish

### Esempio
```php
class UIServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'UI';
}
```

**Motivazione:**  
- Se mancano queste proprietà, alcune risorse potrebbero non essere caricate correttamente.
- La dichiarazione esplicita garantisce portabilità, manutenibilità e coerenza tra tutti i moduli.

**Approfondimenti:**  
- Vedi anche [../../../../docs/PROVIDER_OVERVIEW.md](../../../../docs/PROVIDER_OVERVIEW.md)

## Regola per i file .sh (script shell)

Tutti i file `.sh` (script shell) devono essere posizionati esclusivamente in una sottocartella dedicata chiamata `bashscripts` (ad esempio `docs/bashscripts/`).
Non devono mai trovarsi direttamente nella root di `docs/` o in altre sottocartelle generiche.

**Motivazione:**
- Ordine e reperibilità: tutti gli script shell sono facilmente individuabili e gestibili.
- Sicurezza: si evita l'esecuzione accidentale di script non previsti.
- Coerenza cross-modulo e tra root/moduli.

**Esempio di struttura corretta:**
```
docs/
└── bashscripts/
    ├── deploy.sh
    ├── clear_cache.sh
    └── backup_db.sh
```

**Checklist aggiornata:**
- [x] Nessun file .sh fuori da bashscripts/
- [x] Documentazione aggiornata
- [x] Struttura coerente in tutti i moduli

## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)

*Ultimo aggiornamento: gennaio 2025* 
- [TableLayoutEnum Analysis](table_layout_enum_analysis.md)
- [TableLayoutEnum Usage](table-layout-enum-usage.md)
- **[REGOLA CRITICA: MAI usare ->label()](never_use_label_rule.md)**
- **[REGOLA CRITICA: SEMPRE usa transClass()](transclass_rule.md)**

*Ultimo aggiornamento: gennaio 2025*
*Ultimo aggiornamento: gennaio 2025* 
## Collegamenti

### ✅ **PHPStan Level 9 Compliance**
- **File Core Certificati**: 12/12 file core raggiungono Level 9
- **Type Safety**: 100% sui componenti principali
- **Runtime Safety**: 100% con error handling robusto
- **Template Types**: Risolti tutti i problemi Collection generics
- **Bugfix Recenti**: [S3Test Null ErrorCode Handling](s3test-bugfix-null-errorcode.md), [AwsTest Undefined Variable Fix](awstest-bugfix-undefined-variable.md), [S3Test Method Duplication Fix](s3test-method-duplication-bugfix.md), [PHPStan Level 10 Comprehensive Fixes](phpstan-level10-bugfixes-comprehensive.md)

### ✅ **Translation Standards Compliance**
- **Helper Text**: 100% corretti (vuoti quando uguali alla chiave)
- **Localizzazione**: 100% valori tradotti appropriatamente
- **Sintassi**: 100% sintassi moderna `[]` e `declare(strict_types=1)`
- **Struttura**: 100% struttura espansa completa

### 📊 **Metriche Performance**
- **Component Rendering**: < 50ms per componente
- **Bundle Size**: < 200KB per tutti i componenti
- **Accessibility Score**: 98/100
- **Mobile Responsive**: 100% componenti responsive

## 🚀 **Quick Start**

### 📦 **Installazione**
```bash
# Abilitare il modulo
php artisan module:enable UI

# Pubblicare le configurazioni
php artisan vendor:publish --tag=ui-config

# Compilare assets
npm run build

# Pubblicare componenti
php artisan ui:publish-components
```

### ⚙️ **Configurazione**
```php
// config/ui.php
return [
    'components' => [
        'prefix' => 'ui',
        'auto_discovery' => true,
        'cache' => true,
    ],
    
    'themes' => [
        'default' => 'light',
        'dark_mode' => true,
    ],
    
    'table_layouts' => [
        'default' => TableLayoutEnum::LIST,
        'responsive' => true,
    ],
];
```

### 🧪 **Testing**
```bash
# Test del modulo
php artisan test --testsuite=UI

# Test PHPStan compliance
./vendor/bin/phpstan analyze Modules/UI --level=9

# Test componenti
php artisan ui:test-components
```

## 📚 **Documentazione Completa**

### 🏗️ **Architettura**
- [Components Guide](components.md) - Guida completa componenti
- [Design System](design-system.md) - Sistema design modulare
- [Architecture Rules](architecture_rules.md) - Regole architetturali
- [Best Practices](best-practices.md) - Linee guida sviluppo

### 🧩 **Componenti**
- [Blade Components](blade-components.md) - Componenti Blade riutilizzabili
- [Form Components](form-components.md) - Componenti form avanzati
- [Table Components](table-components.md) - Componenti tabella
- [Navigation Components](navigation-components.md) - Componenti navigazione

### 🎨 **Filament Integration**
- [Filament Components](filament-components.md) - Componenti Filament
- [Widget System](widgets.md) - Sistema widget personalizzati
- [TableLayoutEnum](table-layout-enum-complete-guide.md) - Guida completa enum layout
- [File Upload Components](filament-fileupload.md) - Componenti upload file

### 🔧 **Development**
- [PHPStan Fixes](phpstan/README.md) - Log completo correzioni PHPStan
- [Translation Fixes](theme-translation-sync.md) - Correzioni traduzioni
- [Clean Code](clean-code/README.md) - Principi clean code

## 🎨 **Componenti Principali**

### 📊 **Data Display**
```php
// Tabella dati con layout dinamico
<x-ui.data-table 
    :data="$users" 
    :columns="[
        'name' => 'Nome',
        'email' => 'Email',
        'status' => 'Stato',
    ]"
    layout="grid"
    :pagination="true"
    :search="true"
    :sortable="true"
/>
```

### 📝 **Form Components**
```php
// Form con validazione automatica
<x-ui.form :action="route('users.store')" method="POST">
    <x-ui.input 
        name="name" 
        label="Nome"
        placeholder="Inserisci il nome"
        required
    />
    
    <x-ui.select 
        name="role" 
        label="Ruolo"
        :options="$roles"
        required
    />
    
    <x-ui.button type="submit" variant="primary">
        Salva
    </x-ui.button>
</x-ui.form>
```

### 🎯 **Interactive Components**
```php
// Calendario interattivo
<x-ui.calendar 
    :events="$events"
    :editable="true"
    :selectable="true"
    @event-click="handleEventClick"
/>

// Modal con conferma
<x-ui.modal 
    id="confirm-delete"
    title="Conferma Eliminazione"
    :show="false"
>
    <p>Sei sicuro di voler eliminare questo elemento?</p>
    
    <x-slot:footer>
        <x-ui.button variant="danger" @click="confirmDelete">
            Elimina
        </x-ui.button>
        <x-ui.button variant="secondary" @click="closeModal">
            Annulla
        </x-ui.button>
    </x-slot>
</x-ui.modal>
```

## 🔧 **Best Practices**

### 1️⃣ **Traduzioni Automatiche**
```php
// ✅ CORRETTO - Sistema traduzioni automatico
TextColumn::make('name')  // Traduzione automatica da lang/
Action::make('save')      // Traduzione automatica da lang/

// ❌ ERRATO - Mai usare ->label() direttamente
TextColumn::make('name')->label('Nome')
Action::make('save')->label('Salva')
```

### 2️⃣ **Enum con TransTrait**
```php
// ✅ CORRETTO - Enum con traduzioni automatiche
enum StatusEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
}
```

### 3️⃣ **Componenti Modulari**
```php
// ✅ CORRETTO - Componente riutilizzabile
class DataTableComponent extends Component
{
    public function __construct(
        public readonly Collection $data,
        public readonly array $columns,
        public readonly TableLayoutEnum $layout = TableLayoutEnum::LIST,
    ) {}
    
    public function render(): View
    {
        return view('ui::components.data-table', [
            'data' => $this->data,
            'columns' => $this->columns,
            'layout' => $this->layout,
        ]);
    }
}
```

## 🐛 **Troubleshooting**

### **Problemi Comuni**

#### 🎨 **Componenti non trovati**
```bash
# Verificare registrazione componenti
php artisan ui:list-components

# Pubblicare componenti
php artisan ui:publish-components
```
**Soluzione**: Consulta [Components Guide](components.md)

#### 🌐 **Traduzioni mancanti**
```php
// Verificare file traduzioni
// lang/it/ui.php, lang/en/ui.php, lang/de/ui.php
```
**Soluzione**: Consulta [Translation Fixes](theme-translation-sync.md)

#### 📱 **Layout non responsive**
```php
// Verificare TableLayoutEnum
protected TableLayoutEnum $layout = TableLayoutEnum::GRID;
```
**Soluzione**: Consulta [TableLayoutEnum Guide](table-layout-enum-complete-guide.md)

## 🤝 **Contributing**

### 📋 **Checklist Contribuzione**
- [ ] Codice passa PHPStan Level 9
- [ ] Test unitari aggiunti
- [ ] Documentazione aggiornata
- [ ] Traduzioni complete (IT/EN/DE)
- [ ] Componenti testati
- [ ] Responsive design verificato

### 🎯 **Convenzioni**
- **Component Naming**: Sempre in minuscolo con trattini
- **Translation Keys**: Struttura `modulo::component.field.label`
- **Props Typing**: Sempre tipizzare props dei componenti
- **Accessibility**: Sempre implementare ARIA labels

## 📊 **Roadmap**

### 🎯 **Q1 2025**
- [ ] **Advanced Components** - Componenti interattivi avanzati
- [ ] **Theme System** - Sistema temi personalizzabili
- [ ] **Animation Library** - Libreria animazioni CSS

### 🎯 **Q2 2025**
- [ ] **Component Builder** - Builder visuale componenti
- [ ] **Accessibility Tools** - Strumenti accessibilità
- [ ] **Performance Monitoring** - Monitoraggio performance componenti

### 🎯 **Q3 2025**
- [ ] **AI Component Generation** - Generazione automatica componenti
- [ ] **Advanced Layouts** - Layout avanzati e dinamici
- [ ] **Real-time Collaboration** - Collaborazione in tempo reale

## 📞 **Support & Maintainers**

- **🏢 Team**: Laraxot Development Team
- **📧 Email**: ui@laraxot.com
- **🐛 Issues**: [GitHub Issues](https://github.com/laraxot/ui-module/issues)
- **📚 Docs**: [Documentazione Completa](https://docs.laraxot.com/ui)
- **💬 Discord**: [Laraxot Community](https://discord.gg/laraxot)

---

<<<<<<< HEAD
**Ultimo aggiornamento:** Gennaio 2025  
**Versione:** 2.0 - Consolidata DRY + KISS 
=======
# 🎨 **UI Module** - Sistema Avanzato Componenti Interfaccia

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Blade Components](https://img.shields.io/badge/Blade-Components%20Ready-orange.svg)](https://laravel.com/docs/blade)
[![Design System](https://img.shields.io/badge/Design-System%20Ready-purple.svg)](https://designsystem.digital.gov/)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-97%25-brightgreen.svg)](https://github.com/laraxot/ui-module)

> **🚀 Modulo UI**: Sistema completo di componenti Blade, widget Filament e design system con traduzioni automatiche e layout responsive.

## 📋 **Panoramica**

Il modulo **UI** è il cuore dell'interfaccia utente dell'applicazione, fornendo:

- 🧩 **Componenti Blade** - Componenti riutilizzabili e modulari
- 🎨 **Widget Filament** - Widget personalizzati per admin panel
- 📱 **Layout Responsive** - Sistema layout adattivo
- 🌐 **Traduzioni Automatiche** - Sistema traduzioni integrato
- 🎯 **Design System** - Sistema design coerente
- ⚡ **Performance Ottimizzata** - Componenti ottimizzati per velocità

## ⚡ **Funzionalità Core**

<<<<<<< HEAD
=======
# 🎨 **UI Module** - Sistema Avanzato Componenti Interfaccia

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Blade Components](https://img.shields.io/badge/Blade-Components%20Ready-orange.svg)](https://laravel.com/docs/blade)
[![Design System](https://img.shields.io/badge/Design-System%20Ready-purple.svg)](https://designsystem.digital.gov/)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-97%25-brightgreen.svg)](https://github.com/laraxot/ui-module)

> **🚀 Modulo UI**: Sistema completo di componenti Blade, widget Filament e design system con traduzioni automatiche e layout responsive.

## 📋 **Panoramica**

Il modulo **UI** è il cuore dell'interfaccia utente dell'applicazione, fornendo:

- 🧩 **Componenti Blade** - Componenti riutilizzabili e modulari
- 🎨 **Widget Filament** - Widget personalizzati per admin panel
- 📱 **Layout Responsive** - Sistema layout adattivo
- 🌐 **Traduzioni Automatiche** - Sistema traduzioni integrato
- 🎯 **Design System** - Sistema design coerente
- ⚡ **Performance Ottimizzata** - Componenti ottimizzati per velocità

## ⚡ **Funzionalità Core**

>>>>>>> 51da2b43 (.)
=======

### **Core e Architettura**
- [Architettura e Best Practices](core/architecture.md)
- [Convenzioni di Naming](core/naming-conventions.md)
- [Struttura Moduli](core/module-structure.md)
- [Design System](core/design-system.md)

### **Filament e UI**
- [Best Practices Filament](filament/best-practices.md)
- [Risorse e Relation Manager](filament/resources.md)
- [Azioni e Componenti](filament/actions.md)
- [Dashboard e Pagine](filament/dashboard.md)

### **Sviluppo e Qualità**
- [PHPStan e Analisi Statica](development/phpstan-guide.md)
- [Testing e Best Practices](development/testing.md)
- [Migrazioni e Database](development/migrations.md)
- [Service Provider](development/service-providers.md)

### **Integrazione e Utilità**
- [Traduzioni e Localizzazione](utils/translations.md)
- [Gestione Errori](utils/error-handling.md)
- [Eventi e Code](utils/events.md)
- [Sicurezza](utils/security.md)

### **Template e Esempi**
- [Template Classi Base](templates/base-classes.md)
- [Template Service Provider](templates/service-provider.md)
- [Template Filament](templates/filament.md)

## 🚀 Quick Start

1. **Estendi le classi base appropriate**
2. **Segui le convenzioni di naming**
3. **Utilizza i template standardizzati**
4. **Rispetta le regole PHPStan**

## 🔗 Collegamenti

- [Documentazione Root](../../docs/)
- [Best Practices Sistema](../../docs/core/best-practices.md)
- [Convenzioni Sistema](../../docs/core/conventions.md)

---

**Ultimo aggiornamento:** Gennaio 2025  
**Versione:** 2.0 - Consolidata DRY + KISS 
=======
# 🎨 **UI Module** - Sistema Avanzato Componenti Interfaccia

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Blade Components](https://img.shields.io/badge/Blade-Components%20Ready-orange.svg)](https://laravel.com/docs/blade)
[![Design System](https://img.shields.io/badge/Design-System%20Ready-purple.svg)](https://designsystem.digital.gov/)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-97%25-brightgreen.svg)](https://github.com/laraxot/ui-module)

> **🚀 Modulo UI**: Sistema completo di componenti Blade, widget Filament e design system con traduzioni automatiche e layout responsive.

## 📋 **Panoramica**

Il modulo **UI** è il cuore dell'interfaccia utente dell'applicazione, fornendo:

- 🧩 **Componenti Blade** - Componenti riutilizzabili e modulari
- 🎨 **Widget Filament** - Widget personalizzati per admin panel
- 📱 **Layout Responsive** - Sistema layout adattivo
- 🌐 **Traduzioni Automatiche** - Sistema traduzioni integrato
- 🎯 **Design System** - Sistema design coerente
- ⚡ **Performance Ottimizzata** - Componenti ottimizzati per velocità

## ⚡ **Funzionalità Core**

>>>>>>> 8727c5b (.)
=======
>>>>>>> f89ff0a (.)
### 🧩 **Blade Components**
```php
// Componente riutilizzabile
<x-ui.card>
    <x-slot:header>
        <h2>Dashboard</h2>
    </x-slot>
    
    <x-ui.button variant="primary">
        Crea Nuovo
    </x-ui.button>
</x-ui.card>

// Componente con props tipizzate
<x-ui.data-table 
    :data="$users" 
    :columns="$columns"
    layout="grid"
    responsive="true"
/>
```

### 🎨 **Filament Widgets**
```php
// Widget calendario personalizzato
class UserCalendarWidget extends XotBaseWidget
{
    protected static string $view = 'ui::filament.widgets.user-calendar';
    
    public function getViewData(): array
    {
        return [
            'events' => $this->getUserEvents(),
            'layout' => TableLayoutEnum::GRID,
        ];
    }
}
```

### 📱 **TableLayoutEnum System**
```php
// Sistema layout tabelle responsive
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case LIST = 'list';
    case GRID = 'grid';
    
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
    
    public function getTableContentGrid(): array
    {
        return match($this) {
            self::LIST => ['md' => 1],
            self::GRID => ['md' => 2, 'lg' => 3],
        };
    }
}
```

## 🎯 **Stato Qualità - Gennaio 2025**

### ✅ **PHPStan Level 9 Compliance**
- **File Core Certificati**: 12/12 file core raggiungono Level 9
- **Type Safety**: 100% sui componenti principali
- **Runtime Safety**: 100% con error handling robusto
- **Template Types**: Risolti tutti i problemi Collection generics
- **Bugfix Recenti**: [S3Test Null ErrorCode Handling](s3test-bugfix-null-errorcode.md), [AwsTest Undefined Variable Fix](awstest-bugfix-undefined-variable.md), [S3Test Method Duplication Fix](s3test-method-duplication-bugfix.md), [PHPStan Level 10 Comprehensive Fixes](phpstan-level10-bugfixes-comprehensive.md)

### ✅ **Translation Standards Compliance**
- **Helper Text**: 100% corretti (vuoti quando uguali alla chiave)
- **Localizzazione**: 100% valori tradotti appropriatamente
- **Sintassi**: 100% sintassi moderna `[]` e `declare(strict_types=1)`
- **Struttura**: 100% struttura espansa completa

### 📊 **Metriche Performance**
- **Component Rendering**: < 50ms per componente
- **Bundle Size**: < 200KB per tutti i componenti
- **Accessibility Score**: 98/100
- **Mobile Responsive**: 100% componenti responsive

## 🚀 **Quick Start**

### 📦 **Installazione**
```bash
# Abilitare il modulo
php artisan module:enable UI

# Pubblicare le configurazioni
php artisan vendor:publish --tag=ui-config

# Compilare assets
npm run build

# Pubblicare componenti
php artisan ui:publish-components
```

### ⚙️ **Configurazione**
```php
// config/ui.php
return [
    'components' => [
        'prefix' => 'ui',
        'auto_discovery' => true,
        'cache' => true,
    ],
    
    'themes' => [
        'default' => 'light',
        'dark_mode' => true,
    ],
    
    'table_layouts' => [
        'default' => TableLayoutEnum::LIST,
        'responsive' => true,
    ],
];
```

### 🧪 **Testing**
```bash
# Test del modulo
php artisan test --testsuite=UI

# Test PHPStan compliance
./vendor/bin/phpstan analyze Modules/UI --level=9

# Test componenti
php artisan ui:test-components
```

## 📚 **Documentazione Completa**

### 🏗️ **Architettura**
- [Components Guide](components.md) - Guida completa componenti
- [Design System](design-system.md) - Sistema design modulare
- [Architecture Rules](architecture_rules.md) - Regole architetturali
- [Best Practices](best-practices.md) - Linee guida sviluppo

### 🧩 **Componenti**
- [Blade Components](blade-components.md) - Componenti Blade riutilizzabili
- [Form Components](form-components.md) - Componenti form avanzati
- [Table Components](table-components.md) - Componenti tabella
- [Navigation Components](navigation-components.md) - Componenti navigazione

### 🎨 **Filament Integration**
- [Filament Components](filament-components.md) - Componenti Filament
- [Widget System](widgets.md) - Sistema widget personalizzati
- [TableLayoutEnum](table-layout-enum-complete-guide.md) - Guida completa enum layout
- [File Upload Components](filament-fileupload.md) - Componenti upload file

### 🔧 **Development**
- [PHPStan Fixes](phpstan/README.md) - Log completo correzioni PHPStan
- [Translation Fixes](theme-translation-sync.md) - Correzioni traduzioni
- [Clean Code](clean-code/README.md) - Principi clean code

## 🎨 **Componenti Principali**

### 📊 **Data Display**
```php
// Tabella dati con layout dinamico
<x-ui.data-table 
    :data="$users" 
    :columns="[
        'name' => 'Nome',
        'email' => 'Email',
        'status' => 'Stato',
    ]"
    layout="grid"
    :pagination="true"
    :search="true"
    :sortable="true"
/>
```

### 📝 **Form Components**
```php
// Form con validazione automatica
<x-ui.form :action="route('users.store')" method="POST">
    <x-ui.input 
        name="name" 
        label="Nome"
        placeholder="Inserisci il nome"
        required
    />
    
    <x-ui.select 
        name="role" 
        label="Ruolo"
        :options="$roles"
        required
    />
    
    <x-ui.button type="submit" variant="primary">
        Salva
    </x-ui.button>
</x-ui.form>
```

### 🎯 **Interactive Components**
```php
// Calendario interattivo
<x-ui.calendar 
    :events="$events"
    :editable="true"
    :selectable="true"
    @event-click="handleEventClick"
/>

// Modal con conferma
<x-ui.modal 
    id="confirm-delete"
    title="Conferma Eliminazione"
    :show="false"
>
    <p>Sei sicuro di voler eliminare questo elemento?</p>
    
    <x-slot:footer>
        <x-ui.button variant="danger" @click="confirmDelete">
            Elimina
        </x-ui.button>
        <x-ui.button variant="secondary" @click="closeModal">
            Annulla
        </x-ui.button>
    </x-slot>
</x-ui.modal>
```

## 🔧 **Best Practices**

### 1️⃣ **Traduzioni Automatiche**
```php
// ✅ CORRETTO - Sistema traduzioni automatico
TextColumn::make('name')  // Traduzione automatica da lang/
Action::make('save')      // Traduzione automatica da lang/

// ❌ ERRATO - Mai usare ->label() direttamente
TextColumn::make('name')->label('Nome')
Action::make('save')->label('Salva')
```

### 2️⃣ **Enum con TransTrait**
```php
// ✅ CORRETTO - Enum con traduzioni automatiche
enum StatusEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
}
```

### 3️⃣ **Componenti Modulari**
```php
// ✅ CORRETTO - Componente riutilizzabile
class DataTableComponent extends Component
{
    public function __construct(
        public readonly Collection $data,
        public readonly array $columns,
        public readonly TableLayoutEnum $layout = TableLayoutEnum::LIST,
    ) {}
    
    public function render(): View
    {
        return view('ui::components.data-table', [
            'data' => $this->data,
            'columns' => $this->columns,
            'layout' => $this->layout,
        ]);
    }
}
```

## 🐛 **Troubleshooting**

### **Problemi Comuni**

#### 🎨 **Componenti non trovati**
```bash
# Verificare registrazione componenti
php artisan ui:list-components

# Pubblicare componenti
php artisan ui:publish-components
```
**Soluzione**: Consulta [Components Guide](components.md)

#### 🌐 **Traduzioni mancanti**
```php
// Verificare file traduzioni
// lang/it/ui.php, lang/en/ui.php, lang/de/ui.php
```
**Soluzione**: Consulta [Translation Fixes](theme-translation-sync.md)

#### 📱 **Layout non responsive**
```php
// Verificare TableLayoutEnum
protected TableLayoutEnum $layout = TableLayoutEnum::GRID;
```
**Soluzione**: Consulta [TableLayoutEnum Guide](table-layout-enum-complete-guide.md)

## 🤝 **Contributing**

### 📋 **Checklist Contribuzione**
- [ ] Codice passa PHPStan Level 9
- [ ] Test unitari aggiunti
- [ ] Documentazione aggiornata
- [ ] Traduzioni complete (IT/EN/DE)
- [ ] Componenti testati
- [ ] Responsive design verificato

### 🎯 **Convenzioni**
- **Component Naming**: Sempre in minuscolo con trattini
- **Translation Keys**: Struttura `modulo::component.field.label`
- **Props Typing**: Sempre tipizzare props dei componenti
- **Accessibility**: Sempre implementare ARIA labels

## 📊 **Roadmap**

### 🎯 **Q1 2025**
- [ ] **Advanced Components** - Componenti interattivi avanzati
- [ ] **Theme System** - Sistema temi personalizzabili
- [ ] **Animation Library** - Libreria animazioni CSS

### 🎯 **Q2 2025**
- [ ] **Component Builder** - Builder visuale componenti
- [ ] **Accessibility Tools** - Strumenti accessibilità
- [ ] **Performance Monitoring** - Monitoraggio performance componenti

### 🎯 **Q3 2025**
- [ ] **AI Component Generation** - Generazione automatica componenti
- [ ] **Advanced Layouts** - Layout avanzati e dinamici
- [ ] **Real-time Collaboration** - Collaborazione in tempo reale

## 📞 **Support & Maintainers**

- **🏢 Team**: Laraxot Development Team
- **📧 Email**: ui@laraxot.com
- **🐛 Issues**: [GitHub Issues](https://github.com/laraxot/ui-module/issues)
- **📚 Docs**: [Documentazione Completa](https://docs.laraxot.com/ui)
- **💬 Discord**: [Laraxot Community](https://discord.gg/laraxot)

---

=======
>>>>>>> 566e8fe (.)
### 🏆 **Achievements**

- **🏅 PHPStan Level 9**: File core certificati ✅
- **🏅 Translation Standards**: File traduzione certificati ✅
- **🏅 Blade Components**: 50+ componenti riutilizzabili ✅
- **🏅 Filament Widgets**: 20+ widget personalizzati ✅
- **🏅 Design System**: Sistema design coerente ✅
- **🏅 Responsive Layout**: 100% componenti responsive ✅

### 📈 **Statistics**

- **🧩 Blade Components**: 50+ componenti riutilizzabili
- **🎨 Filament Widgets**: 20+ widget personalizzati
- **📱 Layout Options**: 5 layout predefiniti
- **🌐 Languages**: 3 (IT, EN, DE)
- **🧪 Test Coverage**: 95%
- **⚡ Performance Score**: 97/100

---

**🔄 Ultimo aggiornamento**: 27 Gennaio 2025  
**📦 Versione**: 4.1.0  
**🐛 PHPStan Level 9**: File core certificati ✅  
**🌐 Translation Standards**: File traduzione certificati ✅  
**🚀 Performance**: 97/100 score 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 41f976e (.)
=======
>>>>>>> 51da2b43 (.)
=======
>>>>>>> 41f976e (.)
>>>>>>> 8727c5b (.)
=======
>>>>>>> f89ff0a (.)
=======
# UI Module Documentation

## Overview

The UI module provides shared UI components, utilities, and design system elements for the Laraxot framework. This module ensures consistency across all other modules by providing standardized components and styling.

## Module Structure

```
Modules/UI/
├── app/
│   ├── Components/          # Blade components
│   ├── Facades/            # UI facades
│   ├── Services/           # UI services
│   └── Traits/             # UI traits
├── resources/
│   ├── views/
│   │   └── components/     # Blade component views
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript
├── docs/                   # This documentation
├── composer.json           # Module dependencies
└── module.json            # Module configuration
```

## Core Components

### 1. **Blade Components**
All shared Blade components are located in `Modules/UI/resources/views/components/ui/`:

- **Buttons**: Primary, secondary, danger variants
- **Cards**: Standard card layouts with headers and content
- **Forms**: Input fields, selects, textareas
- **Layout**: Containers, grids, dividers
- **Navigation**: Breadcrumbs, pagination
- **Feedback**: Alerts, notifications, modals

### 2. **Component Usage**
```blade
{{-- Use UI components with ui:: prefix --}}
<x-ui::ui.button variant="primary">
    Click me
</x-ui::ui.button>

<x-ui::ui.card>
    <x-slot name="header">
        Card Title
    </x-slot>
    
    Card content goes here
</x-ui::ui.card>
```

### 3. **Component Variants**
```blade
{{-- Button variants --}}
<x-ui::ui.button variant="primary">Primary</x-ui::ui.button>
<x-ui::ui.button variant="secondary">Secondary</x-ui::ui.button>
<x-ui::ui.button variant="danger">Danger</x-ui::ui.button>

{{-- Card variants --}}
<x-ui::ui.card variant="default">Default</x-ui::ui.card>
<x-ui::ui.card variant="elevated">Elevated</x-ui::ui.card>
<x-ui::ui.card variant="outlined">Outlined</x-ui::ui.card>
```

## Design System

### 1. **Color Palette**
The UI module provides a standardized color palette:

- **Primary**: Main brand colors
- **Secondary**: Supporting colors
- **Success**: Positive actions and states
- **Warning**: Caution and attention
- **Danger**: Errors and destructive actions
- **Info**: Informational content
- **Light/Dark**: Background and text colors

### 2. **Typography**
Standardized typography scale:

- **Headings**: H1-H6 with consistent sizing
- **Body**: Regular and small text variants
- **Monospace**: Code and technical content
- **Weights**: Light, regular, medium, bold

### 3. **Spacing**
Consistent spacing system:

- **Margins**: 0.25rem to 3rem
- **Padding**: 0.25rem to 3rem
- **Gaps**: 0.25rem to 3rem
- **Borders**: 1px to 4px

## Component Development

### 1. **Creating New Components**
When creating new UI components:

1. **Place in correct directory**: `Modules/UI/resources/views/components/ui/`
2. **Use consistent naming**: lowercase with hyphens
3. **Follow existing patterns**: Check similar components
4. **Document thoroughly**: PHPDoc and usage examples
5. **Test across contexts**: Different screen sizes and themes

### 2. **Component Structure**
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

### 3. **Component Props**
```php
<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Ui;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $variant = 'primary',
        public bool $disabled = false,
        public ?string $id = null,
        public ?string $class = null,
    ) {
    }

    public function render()
    {
        return view('ui::components.ui.button');
    }
}
```

## Styling and CSS

### 1. **Tailwind CSS Integration**
The UI module uses Tailwind CSS for styling:

- **Utility classes**: Standard Tailwind utilities
- **Custom components**: Component-specific styles
- **Responsive design**: Mobile-first approach
- **Dark mode**: Built-in dark mode support

### 2. **Custom CSS Variables**
```css
:root {
    --ui-primary: #3b82f6;
    --ui-secondary: #6b7280;
    --ui-success: #10b981;
    --ui-warning: #f59e0b;
    --ui-danger: #ef4444;
}
```

### 3. **Component-Specific Styles**
```css
.btn {
    @apply px-4 py-2 rounded-md font-medium transition-colors;
}

.btn-primary {
    @apply bg-blue-600 text-white hover:bg-blue-700;
}

.btn-secondary {
    @apply bg-gray-600 text-white hover:bg-gray-700;
}
```

## JavaScript Integration

### 1. **Alpine.js Components**
Interactive components use Alpine.js:

```blade
<div x-data="{ open: false }">
    <button @click="open = !open">
        Toggle
    </button>
    
    <div x-show="open" x-transition>
        Content
    </div>
</div>
```

### 2. **Event Handling**
```javascript
// Component events
window.addEventListener('ui:component:event', (event) => {
    console.log('UI component event:', event.detail);
});

// Dispatch events
window.dispatchEvent(new CustomEvent('ui:component:action', {
    detail: { action: 'save', data: {} }
}));
```

## Accessibility

### 1. **ARIA Support**
All components include proper ARIA attributes:

- **Labels**: Proper labeling for screen readers
- **Roles**: Semantic roles for components
- **States**: Current state information
- **Navigation**: Keyboard navigation support

### 2. **Keyboard Support**
- **Tab navigation**: Logical tab order
- **Enter/Space**: Button activation
- **Arrow keys**: Dropdown and select navigation
- **Escape**: Modal and dropdown closing

### 3. **Screen Reader Support**
- **Announcements**: Dynamic content changes
- **Descriptions**: Helpful text for complex components
- **Landmarks**: Proper page structure

## Testing

### 1. **Component Testing**
```php
<?php

declare(strict_types=1);

namespace Tests\Feature\Modules\UI;

use Tests\TestCase;
use Livewire\Livewire;

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
}
```

### 2. **Visual Testing**
- **Screenshot testing**: Compare visual output
- **Cross-browser testing**: Ensure compatibility
- **Responsive testing**: Different screen sizes
- **Theme testing**: Light and dark modes

## Performance

### 1. **Component Optimization**
- **Lazy loading**: Load components when needed
- **Caching**: Cache rendered components
- **Minification**: Minimize CSS and JS
- **Tree shaking**: Remove unused styles

### 2. **Bundle Optimization**
- **Code splitting**: Load only needed components
- **Asset optimization**: Compress and optimize assets
- **CDN integration**: Use CDN for static assets
- **Service workers**: Offline functionality

## Documentation Standards

### 1. **Required Documentation**
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

## Integration with Other Modules

### 1. **Module Usage**
Other modules use UI components:

```blade
{{-- In Chart module --}}
<x-ui::ui.card>
    <x-slot name="header">
        Chart Title
    </x-slot>
    
    <x-chart::chart-component />
</x-ui::ui.card>
```

### 2. **Customization**
Modules can customize UI components:

```blade
{{-- Custom styling --}}
<x-ui::ui.button class="custom-button">
    Custom Button
</x-ui::ui.button>
```

## Maintenance and Updates

### 1. **Version Management**
- **Semantic versioning**: Follow semver principles
- **Changelog**: Document all changes
- **Migration guides**: Help with updates
- **Deprecation notices**: Warn about changes

### 2. **Breaking Changes**
- **Major versions**: Breaking changes
- **Migration tools**: Automated migration
- **Documentation**: Update guides
- **Testing**: Comprehensive testing

## Links to Related Documentation

- [Components Documentation](./components.md)
- [Design System](./design-system.md)
- [Accessibility Guidelines](./accessibility.md)
- [Testing Guidelines](./testing.md)
- [Performance Optimization](./performance.md)

---

*UI Module Documentation - Building Consistent and Accessible User Interfaces*
>>>>>>> 20c12a7 (.)
=======
>>>>>>> 566e8fe (.)

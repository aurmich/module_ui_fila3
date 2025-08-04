<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
# Modulo UI - Documentazione

## Panoramica
Il modulo UI fornisce componenti, widget e funzionalità di interfaccia utente condivise per l'ecosistema Laraxot.

## Funzionalità Principali
- Componenti Blade riutilizzabili
- Widget Filament personalizzati
- Gestione orari di apertura
- Componenti calendario
- Utility di interfaccia
<<<<<<< HEAD
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
=======
<<<<<<< HEAD
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
=======
>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)

## File di Traduzione

### Traduzioni Principali
- `opening_hours.php` - Traduzioni per la gestione orari di apertura
- `opening_hours_field.php` - **FIX COMPLETATO**: Traduzioni per i campi orari con sincronizzazione lingue
- `user_calendar.php` - Traduzioni per il calendario utente
- `components.php` - Traduzioni per i componenti UI
<<<<<<< HEAD
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
=======
<<<<<<< HEAD
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
=======
>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)

### Fix Implementati
- [Fix Traduzioni Opening Hours Field](opening_hours_translation_fix.md) - **REGOLA CRITICA**: Sincronizzazione obbligatoria tra lingue IT/EN
- [Fix Traduzioni Opening Hours](opening_hours_translation_improvement.md) - Miglioramento traduzioni orari
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 10597281 (.)
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md) - **NUOVO**: Documentazione completa enum layout tabelle

## Regole Critiche

### ❌ MAI usare ->label()
```php
// ERRORE - Non fare mai questo
TextColumn::make('name')->label('Nome')
Action::make('save')->label('Salva')

// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
Action::make('save')
```

### ✅ SEMPRE usa transClass() negli Enum
```php
// ✅ CORRETTO - Implementazione Enum con TransTrait
use Modules\Xot\Filament\Traits\TransTrait;

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value . '.color');
    }
}
```

### ❌ MAI usa match() per traduzioni negli Enum
```php
// ❌ ERRORE - Non fare mai questo
public function getLabel(): string
{
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
}
```

### Sistema Traduzioni Automatico
- Il LangServiceProvider gestisce automaticamente le traduzioni
- Le chiavi vengono generate automaticamente dal nome del campo
- Struttura: `modulo::risorsa.fields.campo.label`
- **SEMPRE** implementare traduzioni nei file lang/ prima di usare i componenti

<<<<<<< HEAD
=======
=======

## Regole Critiche

>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)
### Sincronizzazione Lingue
- **TUTTI** i file `lang/en/` devono avere le stesse voci di `lang/it/`
- **SEMPRE** confrontare file IT e EN prima di modifiche
- **SEMPRE** aggiungere nuove voci in entrambe le lingue
<<<<<<< HEAD
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
=======
<<<<<<< HEAD
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
=======
>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)

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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 10597281 (.)
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
    
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }
}
```

<<<<<<< HEAD
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

=======
=======
>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)
## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 10597281 (.)
- [TableLayoutEnum Analysis](table_layout_enum_analysis.md)
- [TableLayoutEnum Usage](table-layout-enum-usage.md)
- **[REGOLA CRITICA: MAI usare ->label()](never_use_label_rule.md)**
- **[REGOLA CRITICA: SEMPRE usa transClass()](transclass_rule.md)**

<<<<<<< HEAD
*Ultimo aggiornamento: gennaio 2025*
=======
*Ultimo aggiornamento: gennaio 2025* 
=======

*Ultimo aggiornamento: gennaio 2025* 
=======
=======
>>>>>>> 15cb84fb (fix collisions)
# AVVISO IMPORTANTE (2025-05-13)

> **Errore riscontrato:** Il componente `logo.blade.php` era stato posizionato erroneamente in `resources/views/components/ui/` invece che in `Modules/UI/resources/views/components/ui/`.
>
> **Causa:** Dimenticanza della regola di modularità Laraxot: tutti i componenti Blade UI condivisi devono essere sempre nel modulo UI, mai nella root Laravel.
>
> **Soluzione:** Seguire SEMPRE la regola documentata in [PATHS_AND_ASSETS.md](./PATHS_AND_ASSETS.md) e aggiornata anche nella root docs/links.md.

<<<<<<< HEAD
=======
>>>>>>> bead9c28 (fix case)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
# Modulo UI

## Panoramica
Il modulo UI fornisce componenti e layout standardizzati per l'interfaccia utente dell'applicazione, basati su Filament.

## Componenti

### Forms
- CustomSelect: Select avanzato con ricerca e precaricamento
- MoneyInput: Input per valori monetari con formattazione automatica
- DateRangePicker: Selezione intervalli di date
- FileUpload: Upload file con preview e validazione
- **OpeningHoursField**: Campo per gestione orari settimanali (mattina/pomeriggio) - [Documentazione](components/opening-hours-field.md)
  - ⚠️ **ERRORE CRITICO RISOLTO** (Dic 2024): Proprietà `$view` mancante causava runtime error
  - ✅ **CORREZIONE**: Vista Blade personalizzata + traduzioni complete
- **OpeningHoursField**: Campo per gestione orari settimanali (mattina/pomeriggio) - [Documentazione](components/opening-hours-field.md)
  - ⚠️ **ERRORE CRITICO RISOLTO** (Dic 2024): Proprietà `$view` mancante causava runtime error
  - ✅ **CORREZIONE**: Vista Blade personalizzata + traduzioni complete
- **OpeningHoursField**: Campo per gestione orari settimanali (mattina/pomeriggio) - [Documentazione](components/opening-hours-field.md)
  - ⚠️ **ERRORE CRITICO RISOLTO** (Dic 2024): Proprietà `$view` mancante causava runtime error
  - ✅ **CORREZIONE**: Vista Blade personalizzata + traduzioni complete

### Tables
- CustomDataTable: Tabella dati avanzata con ordinamento e filtri
- StatusBadge: Badge per stati con colori e icone
- ActionButtons: Pulsanti azione standardizzati
- FilterDropdown: Dropdown per filtri avanzati

### Charts
- LineChart: Grafico a linee per trend temporali
- PieChart: Grafico a torta per distribuzioni
- BarChart: Grafico a barre per confronti
- StatsOverview: Widget per statistiche generali

## Layout
- AdminLayout: Layout principale amministrazione
- AuthLayout: Layout per pagine di autenticazione
- PrintLayout: Layout per stampe e PDF

## Temi e Stili
- Variabili CSS personalizzate
- Tema light/dark
- Responsive design
- Accessibilità

## Integrazione Filament
- Personalizzazione tema Filament
- Componenti custom
- Plugin e widget
- Form builder esteso

## Best Practices
1. Utilizzare i componenti standard
2. Mantenere consistenza visiva
3. Seguire le linee guida di accessibilità
4. Documentare nuovi componenti
5. Testare su diversi dispositivi

## Dipendenze
- TailwindCSS
- Alpine.js
- Filament
### Versione HEAD

- Livewire 
## Collegamenti tra versioni di readme.md
* [readme.md](../../../Gdpr/docs/readme.md)
* [readme.md](../../../UI/docs/readme.md)
* [readme.md](../../../Lang/docs/readme.md)
* [readme.md](../../../Activity/docs/readme.md)
* [readme.md](../../../Cms/docs/readme.md)


### Versione Incoming

- Livewire 

---

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 15cb84fb (fix collisions)
## Server MCP consigliati per UI

Per il modulo UI, si consiglia di utilizzare i seguenti server MCP:

- **sequential-thinking**: per orchestrare workflow di generazione componenti UI, brainstorming di design e automazione di processi di revisione UI.
- **memory**: per mantenere una knowledge base di componenti, template, pattern di design e storico delle revisioni UI.
- **filesystem**: per esportare/importare componenti, template o asset grafici.
- **postgres**: se il modulo utilizza un database PostgreSQL per archiviare configurazioni UI, template o log di utilizzo.
- **puppeteer**: per automatizzare test end-to-end, generazione di screenshot di componenti, esportazione PDF o scraping di UI da siti esterni.

**Nota:**
- Usa solo server MCP Node.js disponibili su npm e avviabili con `npx`.
- Configura sempre gli argomenti obbligatori (es. directory per filesystem, stringa di connessione per postgres).
- Non usare fetch, mysql o redis se non attivo.

Per dettagli e best practice consulta la guida generale MCP nel workspace.

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> bead9c28 (fix case)
=======
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

>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
>>>>>>> 10597281 (.)

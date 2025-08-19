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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 7da17b2 (.)
=======
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 8a76661 (.)
=======
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 64e34f5 (.)
=======
=======
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 7da17b2 (.)
>>>>>>> 5ac0949f (.)
=======
- **TableLayoutEnum**: Sistema di layout per tabelle Filament (lista/griglia)
>>>>>>> 7494187 (.)

## File di Traduzione

### Traduzioni Principali
- `opening_hours.php` - Traduzioni per la gestione orari di apertura
- `opening_hours_field.php` - **FIX COMPLETATO**: Traduzioni per i campi orari con sincronizzazione lingue
- `user_calendar.php` - Traduzioni per il calendario utente
- `components.php` - Traduzioni per i componenti UI
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
>>>>>>> 7da17b2 (.)
=======
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
>>>>>>> 8a76661 (.)
=======
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
>>>>>>> 64e34f5 (.)
=======
=======
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
>>>>>>> 7da17b2 (.)
>>>>>>> 5ac0949f (.)
=======
- `table-layout.php` - **NUOVO**: Traduzioni per TableLayoutEnum (IT/EN/DE)
>>>>>>> 7494187 (.)

### Fix Implementati
- [Fix Traduzioni Opening Hours Field](opening_hours_translation_fix.md) - **REGOLA CRITICA**: Sincronizzazione obbligatoria tra lingue IT/EN
- [Fix Traduzioni Opening Hours](opening_hours_translation_improvement.md) - Miglioramento traduzioni orari
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ac0949f (.)

## Regole Critiche

=======
<<<<<<< HEAD
=======
>>>>>>> 8a76661 (.)
=======
>>>>>>> 5ac0949f (.)
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md) - **NUOVO**: Documentazione completa enum layout tabelle

## Regole Critiche

=======
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md) - **NUOVO**: Documentazione completa enum layout tabelle

## Regole Critiche

>>>>>>> 64e34f5 (.)
=======
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md) - **NUOVO**: Documentazione completa enum layout tabelle

## Regole Critiche

>>>>>>> 7494187 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7da17b2 (.)
=======
>>>>>>> 8a76661 (.)
=======
>>>>>>> 64e34f5 (.)
=======
>>>>>>> 7da17b2 (.)
>>>>>>> 5ac0949f (.)
=======
>>>>>>> 7494187 (.)
### Sincronizzazione Lingue
- **TUTTI** i file `lang/en/` devono avere le stesse voci di `lang/it/`
- **SEMPRE** confrontare file IT e EN prima di modifiche
- **SEMPRE** aggiungere nuove voci in entrambe le lingue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
>>>>>>> 7da17b2 (.)
=======
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
>>>>>>> 8a76661 (.)
=======
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
>>>>>>> 64e34f5 (.)
=======
=======
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
>>>>>>> 7da17b2 (.)
>>>>>>> 5ac0949f (.)
=======
- **NUOVO**: Aggiungere sempre anche traduzioni tedesche (DE)
>>>>>>> 7494187 (.)

### Struttura Traduzioni
- Struttura espansa obbligatoria per tutti i campi
- Sintassi moderna `[]` invece di `array()`
- `declare(strict_types=1);` sempre presente
- `tooltip` e `helper_text` per ogni campo

## Componenti UI

### Posizionamento
- **SEMPRE** in `Modules/UI/resources/views/components/ui/`
- **MAI** nella root `resources/views/components/`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ac0949f (.)

### Convenzioni
- Nomi file in minuscolo
- PHPDoc completo per ogni componente
- Organizzazione in sottocartelle logiche
=======
<<<<<<< HEAD
=======
>>>>>>> 8a76661 (.)
=======
>>>>>>> 64e34f5 (.)
=======
>>>>>>> 5ac0949f (.)

### Convenzioni
- Nomi file in minuscolo
- PHPDoc completo per ogni componente
- Organizzazione in sottocartelle logiche

## Enums e Utilities
<<<<<<< HEAD

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ac0949f (.)
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
>>>>>>> 7da17b2 (.)

=======
<<<<<<< HEAD
>>>>>>> 8a76661 (.)
## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)
<<<<<<< HEAD
<<<<<<< HEAD

*Ultimo aggiornamento: gennaio 2025* 
=======
=======
>>>>>>> 8a76661 (.)
- [TableLayoutEnum Analysis](table_layout_enum_analysis.md)
- [TableLayoutEnum Usage](table-layout-enum-usage.md)
- **[REGOLA CRITICA: MAI usare ->label()](never_use_label_rule.md)**
- **[REGOLA CRITICA: SEMPRE usa transClass()](transclass_rule.md)**

<<<<<<< HEAD
*Ultimo aggiornamento: gennaio 2025*
>>>>>>> 7da17b2 (.)
=======
*Ultimo aggiornamento: gennaio 2025* 
>>>>>>> 8a76661 (.)
=======
=======
>>>>>>> b883666 (.)
=======
>>>>>>> c7de8d3daa (.)
>>>>>>> 5ac0949f (.)
## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)
<<<<<<< HEAD

*Ultimo aggiornamento: gennaio 2025* 
=======
- [TableLayoutEnum Analysis](table_layout_enum_analysis.md)
- [TableLayoutEnum Usage](table-layout-enum-usage.md)
- **[REGOLA CRITICA: MAI usare ->label()](never_use_label_rule.md)**
- **[REGOLA CRITICA: SEMPRE usa transClass()](transclass_rule.md)**

<<<<<<< HEAD
*Ultimo aggiornamento: gennaio 2025* 
<<<<<<< HEAD
>>>>>>> 64e34f5 (.)
=======
>>>>>>> b883666 (.)
=======
<<<<<<< HEAD
*Ultimo aggiornamento: gennaio 2025*
>>>>>>> 7da17b2 (.)
=======
*Ultimo aggiornamento: gennaio 2025* 
>>>>>>> c7de8d3daa (.)
>>>>>>> 5ac0949f (.)
=======

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

## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)
- [TableLayoutEnum Analysis](table_layout_enum_analysis.md)
- [TableLayoutEnum Usage](table-layout-enum-usage.md)
- **[REGOLA CRITICA: MAI usare ->label()](never_use_label_rule.md)**
- **[REGOLA CRITICA: SEMPRE usa transClass()](transclass_rule.md)**

*Ultimo aggiornamento: gennaio 2025* 
>>>>>>> 7494187 (.)

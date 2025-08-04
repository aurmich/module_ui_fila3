<<<<<<< HEAD
# Modulo UI - Documentazione

## Panoramica
Il modulo UI fornisce componenti, widget e funzionalità di interfaccia utente condivise per l'ecosistema Laraxot.

## Funzionalità Principali
- Componenti Blade riutilizzabili
- Widget Filament personalizzati
- Gestione orari di apertura
- Componenti calendario
- Utility di interfaccia

## File di Traduzione

### Traduzioni Principali
- `opening_hours.php` - Traduzioni per la gestione orari di apertura
- `opening_hours_field.php` - **FIX COMPLETATO**: Traduzioni per i campi orari con sincronizzazione lingue
- `user_calendar.php` - Traduzioni per il calendario utente
- `components.php` - Traduzioni per i componenti UI

### Fix Implementati
- [Fix Traduzioni Opening Hours Field](opening_hours_translation_fix.md) - **REGOLA CRITICA**: Sincronizzazione obbligatoria tra lingue IT/EN
- [Fix Traduzioni Opening Hours](opening_hours_translation_improvement.md) - Miglioramento traduzioni orari

## Regole Critiche

### Sincronizzazione Lingue
- **TUTTI** i file `lang/en/` devono avere le stesse voci di `lang/it/`
- **SEMPRE** confrontare file IT e EN prima di modifiche
- **SEMPRE** aggiungere nuove voci in entrambe le lingue

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

## Collegamenti

- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Traduzioni](translation_rules.md)
- [Best Practices Filament](filament_best_practices.md)
- [Componenti UI](components.md)

*Ultimo aggiornamento: gennaio 2025* 
=======
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
- **RadioCardSelector**: Componente riutilizzabile per selezioni con card radio - [Documentazione](components/radio-card-selector-component.md)
  - ✅ **IMPLEMENTATO** (Gen 2025): Componente clean per selezioni visuali
  - ✅ **FEATURES**: Card responsive, Alpine.js, auto-populate fields
  - 🎯 **UTILIZZO**: Widget FindDoctorAndAppointment, selezioni multi-elemento
  - 🎯 **NUOVO COMPONENTE** (Gen 2025): Riutilizzabile cross-module per healthcare applications
  - ✅ **FEATURES**: Layout responsive, accessibilità, Alpine.js integration
  - 🔧 **UTILIZZO**: Widget SaluteOra per studio selection in appointment booking

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

## Componenti View Aggiornati (Gen 2025)

### Studio Selector Component
- **File**: `resources/views/ui/studio-selector.blade.php`
- **Namespace**: `ui::ui.studio-selector`  
- **Utilizzo**: Widget selection con card design conforme a specifiche
- **Features**: 
  - Cards responsive cliccabili
  - Alpine.js per interazioni real-time
  - Integrazione Livewire per state management
  - Empty states e loading states
  - Accessibilità WCAG compliant

**Utilizzo in Widget:**
```php
Form\View::make('ui::ui.studio-selector')
    ->viewData(fn (Get $get) => [
        'studios' => $this->getStudiosForLocationFull($get),
        'selectedStudioId' => $get('selected_studio'),
    ])
```

**Implementato in:** `Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget`

---

>>>>>>> aurmich/dev

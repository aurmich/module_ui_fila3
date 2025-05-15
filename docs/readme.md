# Modulo UI

<<<<<<< HEAD
## Panoramica
Il modulo UI fornisce componenti e layout standardizzati per l'interfaccia utente dell'applicazione, basati su Filament.

## Componenti

### Forms
- CustomSelect: Select avanzato con ricerca e precaricamento
- MoneyInput: Input per valori monetari con formattazione automatica
- DateRangePicker: Selezione intervalli di date
- FileUpload: Upload file con preview e validazione

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

=======
## Descrizione

Il modulo UI fornisce componenti di interfaccia utente riutilizzabili, layout e utility per costruire interfacce web coerenti e visivamente accattivanti all'interno dell'applicazione. Basato su Tailwind CSS e integrato con Filament, offre un'esperienza utente moderna e reattiva.

## Analisi PHPStan

Il modulo è stato analizzato con PHPStan per migliorare la qualità del codice:

- [Livello 1 - Analisi base](phpstan/level_1.md)
- [Livello 5 - Analisi intermedia](phpstan/level_5.md)
- [Livello 10 - Analisi avanzata](phpstan/level_10.md)
- [Documentazione generale PHPStan](/docs/phpstan/problemi_e_soluzioni.md)

## Componenti Principali

### Livewire

- **DarkModeSwitcher**: Componente per attivare/disattivare la modalità scura dell'interfaccia
- **ImageGallery**: Visualizzatore di gallerie di immagini con supporto per lightbox

### Components

- **Render/Block**: Componente per il rendering di blocchi di contenuto dinamici
- **Render/Blocks**: Componente per il rendering di collezioni di blocchi
- **BreadLink**: Componente per la generazione di breadcrumb
- **Svg**: Componente per il rendering di icone SVG
- **Logo**: Componente per visualizzare il logo dell'applicazione

### Filament

- **Forms/Components**: Set di componenti di form avanzati per Filament
  - IconPicker: Selettore di icone
  - PasswordStrengthField: Campo password con indicatore di robustezza
  - AddressField: Campo per l'inserimento di indirizzi
  - TreeField: Campo per gestire dati gerarchici

- **Blocks**: Componenti per costruire layout modulari
  - Title: Blocco titolo
  - Image: Blocco immagine
  - ImagesGallery: Galleria di immagini
  - VideoSpatie: Player video basato su Spatie Media Library

- **Widgets**: Widget per dashboard
  - OverlookWidget: Widget di panoramica
  - StatWithIconWidget: Statistiche con icone
  - GroupWidget: Widget per raggruppare altri widget

### Actions

- **GetAllIconsAction**: Recupera tutte le icone disponibili
- **GetAllBlocksAction**: Recupera tutti i blocchi di contenuto disponibili

## Enums

- **TableLayoutEnum**: Tipi di layout per tabelle
- **CornerPositionEnum**: Posizioni per elementi negli angoli

## Dipendenze

Il modulo dipende dai seguenti pacchetti:

- `spatie/laravel-medialibrary`: Per la gestione dei media
- `filament/filament`: Per componenti dell'interfaccia amministrativa
- `livewire/livewire`: Per componenti interattivi

## Utilizzo

Per utilizzare i componenti UI nel tuo progetto:

1. Includi il modulo UI nelle dipendenze del tuo progetto
2. Importa i componenti o le classi necessarie
3. Utilizza i componenti nei tuoi template Blade o nelle classi PHP

## Links

- [Documentazione PHPStan generale](/docs/phpstan.md)
- [Problemi e soluzioni PHPStan](/docs/phpstan/problemi_e_soluzioni.md) 
>>>>>>> 5512b9a (.)

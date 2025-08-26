# Modulo UI - Componenti e Sistema di Design PTVX Fila3 Mono

## Panoramica

Il modulo UI fornisce componenti, layout e sistema di design unificato per l'ecosistema PTVX Fila3 Mono, implementando i principi DRY, KISS, SOLID e robustezza.

## 🎯 Principi Fondamentali

### DRY (Don't Repeat Yourself)
- **Centralizzazione**: Componenti UI condivisi tra moduli
- **Riusabilità**: Pattern di design standardizzati
- **Manutenibilità**: Aggiornamenti centralizzati

### KISS (Keep It Simple, Stupid)
- **Struttura lineare**: Organizzazione intuitiva
- **Naming coerente**: Convenzioni uniformi
- **Navigazione semplice**: Massimo 3 livelli

### SOLID
- **Single Responsibility**: Ogni componente ha uno scopo specifico
- **Open/Closed**: Estendibile senza modifiche
- **Liskov Substitution**: Sottoclassi sostituibili
- **Interface Segregation**: Interfacce specifiche
- **Dependency Inversion**: Dipendenze da astrazioni

## 🏗️ Componenti Core

### Sistema di Layout
- [**Sistema Layout**](layout-system.md) - Strutture e griglie
- [**Sistema Temi**](theme-system.md) - Personalizzazione e varianti
- [**Componenti UI**](ui-components.md) - Elementi riutilizzabili

### Gestione Asset
- [**Gestione Asset**](asset-management.md) - CSS, JS e risorse
- [**Gestione Icone**](icon-management.md) - Icone e simboli
- [**Personalizzazioni Filament**](filament-customizations.md) - Estensioni Filament

### Configurazione
- [**Configurazione**](configuration.md) - Impostazioni e personalizzazioni
- [**Troubleshooting**](troubleshooting.md) - Risoluzione problemi comuni

## 📚 Documentazione

### Guide
- [**Guide**](guides/) - Tutorial e esempi pratici
- [**Esempi**](examples/) - Implementazioni di riferimento
- [**Riferimento**](reference/) - API e metodi

## 🚀 Quick Start

### 1. Utilizzo Componenti
```blade
{{-- Componente UI base --}}
<x-ui::ui.button type="primary">
    Salva Modifiche
</x-ui::ui.button>

{{-- Componente con varianti --}}
<x-ui::ui.card variant="elevated">
    <x-slot name="header">
        <h3>Titolo Card</h3>
    </x-slot>
    
    Contenuto della card
</x-ui::ui.card>
```

### 2. Personalizzazione Tema
```php
// config/ui.php
return [
    'theme' => [
        'primary_color' => '#3B82F6',
        'secondary_color' => '#6B7280',
        'font_family' => 'Inter, sans-serif',
    ],
];
```

### 3. Registrazione Icone Custom
```php
// ServiceProvider
use Filament\Support\Facades\FilamentIcon;

public function boot(): void
{
    FilamentIcon::register([
        'ui-custom-icon' => Svg::make('custom-icon', __DIR__.'/../resources/svg/custom-icon.svg'),
    ]);
}
```

## 🔗 Collegamenti

- [**Documentazione Principale**](../../../docs/README.md)
- [**Modulo Xot**](../Xot/docs/README.md) - Fondamento architetturale
- [**Best Practices**](../../../docs/best-practices/)

## 📊 Metriche Qualità

- **PHPStan**: Livello 10 obbligatorio
- **PSR-12**: Conformità completa
- **Accessibilità**: WCAG 2.1 AA
- **Responsività**: Mobile-first design

---

*Ultimo aggiornamento: giugno 2025*

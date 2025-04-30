# Componenti

## Panoramica
Documentazione dei componenti utilizzati nel progetto, inclusi View Components, Blade Components e altri tipi di componenti riutilizzabili.

## View Components

### Modulo Cms
Il modulo Cms fornisce componenti per la gestione dell'interfaccia utente. [Documentazione Completa](../laravel/Modules/Cms/docs/components/view-components.md)

#### Componenti Principali
- **Section**: Gestione sezioni riutilizzabili
- **AppLayout**: Layout principale
- **GuestLayout**: Layout per ospiti

### Utilizzo Base
```blade
<x-cms::section slug="main-header" />
```

## Best Practices
1. **Modularità**
   - Componenti atomici
   - Configurazione flessibile
   - Riutilizzabilità

2. **Performance**
   - Caching appropriato
   - Lazy loading
   - Ottimizzazione rendering

## Collegamenti
- [Documentazione Modulo Cms](../laravel/Modules/Cms/docs/README.md)
- [Documentazione Sezioni](sections.md)

## Note
Questa documentazione fornisce una panoramica dei componenti disponibili. Per i dettagli completi, consultare la documentazione specifica nei moduli. 

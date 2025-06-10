# Utilizzo dei Componenti Blade Filament

Nel progetto, esiste una regola fondamentale: **utilizzare sempre i componenti Blade forniti da Filament quando disponibili**, invece di creare componenti personalizzati duplicati.

## Best Practices

- Utilizzare i componenti nativi di Filament per garantire compatibilità e aggiornabilità
- Creare wrapper personalizzati solo se strettamente necessario
- Seguire le convenzioni di naming e struttura del progetto

## Esempio di Utilizzo

```blade
<x-filament::input ... />
```

## Conclusione

Seguendo queste regole, si garantisce la massima compatibilità e manutenibilità dei componenti Blade in ogni progetto.
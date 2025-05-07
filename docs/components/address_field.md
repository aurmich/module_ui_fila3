# AddressField Component

## Panoramica
Il componente AddressField è un campo Filament personalizzato per la gestione degli indirizzi. Integra funzionalità di geocoding e validazione degli indirizzi.

## Caratteristiche
- Autocompletamento degli indirizzi
- Validazione dei campi dell'indirizzo
- Integrazione con servizi di geocoding
- Supporto per formati di indirizzo internazionali

## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:

1. Tipizzazione stretta dei parametri
2. Gestione null-safe degli oggetti Address
3. Validazione dei dati di input
4. Correzione dei type hints per le proprietà
5. Implementazione delle interfacce corrette

## Utilizzo
```php
<<<<<<< HEAD
<<<<<<< HEAD
=======

### Versione HEAD

>>>>>>> 9256606 (.)
use Modules\UI\ment\Forms\Components\AddressField;
=======
<<<<<<< HEAD
use Modules\UI\App\Filament\Forms\Components\AddressField;
=======
use Modules\UI\ment\Forms\Components\AddressField;
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)

### Versione Alternativa


### Versione HEAD

use Modules\UI\App\Filament\Forms\Components\AddressField;

### Versione Alternativa

use Modules\UI\ment\Forms\Components\AddressField;

---


---


AddressField::make('address')
    ->required()
    ->searchable()
    ->withMap()
    ->withValidation();
```

## Best Practices
1. Utilizzare sempre la validazione dei campi
2. Implementare la gestione degli errori per il geocoding
3. Configurare correttamente i servizi di geocoding
4. Testare con diversi formati di indirizzo

<<<<<<< HEAD
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
=======
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
=======
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
=======

### Versione HEAD

[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 

### Versione Alternativa


### Versione HEAD

[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 

### Versione Alternativa

[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 

---


---

>>>>>>> 9256606 (.)

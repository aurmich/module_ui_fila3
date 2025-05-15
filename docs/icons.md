# Sistema di Icone

## Utilizzo
Il modulo UI utilizza un sistema di icone standardizzato basato su:
- Heroicons per icone di sistema
- Font Awesome per icone aggiuntive
- Custom SVG per icone specifiche

## Implementazione
<<<<<<< Updated upstream
<<<<<<< HEAD
### Versione Dettagliata
=======
>>>>>>> c6eb299 (.)
=======
### Versione Dettagliata
>>>>>>> Stashed changes
1. **Heroicons**
   - Utilizzare i componenti Blade
   - Supporto per stili solid/outline
   - Dimensioni standard definite

2. **Font Awesome**
   - Classe CSS fa-*
   - Supporto per stili regular/solid/brands
   - Dimensioni configurabili

3. **Custom SVG**
   - Salvare in resources/icons/
   - Utilizzare il componente x-icon
   - Supporto per colori e dimensioni

<<<<<<< Updated upstream
<<<<<<< HEAD
### Versione Alternativa
(vedi marker git, integrare eventuali dettagli tecnici aggiuntivi dalle versioni branch)

=======
### Versione HEAD
=======
### Versione Alternativa
Il modulo UI utilizza un sistema di icone basato su Blade Icons e Heroicons, con integrazione automatica attraverso `XotBaseServiceProvider`.
>>>>>>> Stashed changes

## Introduzione
Il modulo UI utilizza un sistema di icone basato su Blade Icons e Heroicons, con integrazione automatica attraverso `XotBaseServiceProvider`. Questo documento descrive come utilizzare le icone nei componenti e nelle pagine.

## Indice
- [Configurazione](#configurazione)
- [Utilizzo](#utilizzo)
- [Best Practices](#best-practices)
- [Personalizzazione](#personalizzazione)
- [Integrazione con Filament](#integrazione-con-filament)
- [Risoluzione dei Problemi](#risoluzione-dei-problemi)
- [Backlink](#backlink)

## Configurazione
Le icone vengono configurate automaticamente da `XotBaseServiceProvider`. Non è necessario configurare manualmente Blade Icons.

### Registrazione Automatica
```php
// In XotBaseServiceProvider
protected function registerBladeIcons(): void
{
    $this->loadIcons();
}
```

## Utilizzo
### Sintassi di Base
```php
// Utilizzo di un'icona Heroicon
<x-heroicon-o-home class="w-5 h-5" />

// Utilizzo con nome dinamico
<x-dynamic-component :component="'heroicon-o-'.$iconName" class="w-5 h-5" />
```

### Esempi Pratici
```php
// In un componente button
<x-ui::button icon="home" label="Home" />

// In un menu di navigazione
<x-ui::nav-item icon="menu" label="Menu" href="#" />
```

## Best Practices
1. **Utilizzare Heroicons**: Preferire sempre le icone Heroicon fornite con Filament.
2. **Dimensioni Consistenti**: Utilizzare classi Tailwind consistenti per le dimensioni (es. `w-5 h-5`).
3. **Nomi Semantici**: Scegliere nomi di icone che riflettano il loro significato.
4. **Accessibilità**: Aggiungere attributi ARIA quando l'icona è l'unico elemento interattivo.

### Esempio Accessibilità
```php
<x-heroicon-o-trash class="w-5 h-5" aria-label="Elimina elemento" role="button" />
```

## Personalizzazione
### Aggiungere Icone Custom
1. Creare una directory `resources/svg` nel modulo.
2. Aggiungere i file SVG delle icone custom.
3. Le icone verranno registrate automaticamente da `XotBaseServiceProvider`.

### Esempio Icona Custom
```php
// Utilizzo icona custom
<x-custom-icon-name class="w-6 h-6" />
```

## Integrazione con Filament
```php
// In una risorsa Filament
use Filament\Forms\Components\TextInput;

TextInput::make('title')
    ->prefixIcon('heroicon-o-document')
    ->suffixIcon('heroicon-o-chevron-down')
```

## Risoluzione dei Problemi
1. **Icona non visualizzata**: Verificare che il nome dell'icona sia corretto e che esista nel set Heroicon.
2. **Dimensioni errate**: Assicurarsi di utilizzare classi Tailwind appropriate per width e height.
3. **Conflitti di stile**: Verificare che non ci siano CSS personalizzati che sovrascrivono gli stili delle icone.

<<<<<<< Updated upstream
=======
>>>>>>> 3e75fd3 (.)
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
## Action GetAllIconsAction
- Scopo: carica dinamicamente tutte le icone disponibili per un determinato contesto UI (es. form, table).
- Parametri:
  - `string $context`: contesto di utilizzo delle icone.
- Ritorna: `array<string, array<string, mixed>>` una mappa di set di icone che include prefisso, nome e lista di icone.
- Utilizzo: invocata da componenti Livewire o controller per popolare dropdown o palette di icone.

[Classe GetAllIconsAction](/laravel/Modules/UI/app/Actions/Icon/GetAllIconsAction.php)

<<<<<<< Updated upstream
<<<<<<< HEAD
=======

### Versione Incoming


---

=======
>>>>>>> aurmich/dev
>>>>>>> 3e75fd3 (.)
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
## Best Practices
- Mantenere consistenza nell'uso delle icone
- Preferire Heroicons per UI di sistema
- Usare Font Awesome per icone social/brand
- Custom SVG solo per icone specifiche del progetto

<<<<<<< Updated upstream
<<<<<<< HEAD
## Decisione Architetturale
Questa documentazione integra entrambe le versioni emerse dal conflitto per fornire sia una panoramica rapida sia una guida dettagliata, facilitando la consultazione a diversi livelli di approfondimento.

## Backlink
=======
## Backlink
- [Torna a README.md](../README.md)
- [Vedi anche: Componenti UI](../components.md)
- [Vedi anche: Filament Best Practices](../filament-best-practices.md)
>>>>>>> Stashed changes
- [Torna a docs/links.md](../../../../docs/links.md)
- [Vedi anche: UI/docs/components.md](./components.md)
- [Vedi anche: Xot/docs/README.md](../../Xot/docs/README.md)

<<<<<<< Updated upstream
=======
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes
## Esempi
```blade
<x-heroicon-o-user class="w-6 h-6" />
<i class="fa fa-user"></i>
<x-icon name="custom-logo" class="w-8 h-8" />
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
```

## Collegamenti
- [Componenti UI](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/UI/docs/components.md)
- [Documentazione Filament](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/UI/docs/filament/README.md)
- [Convenzioni di Naming](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/UI/docs/naming-conventions.md)
<<<<<<< Updated upstream
=======
```
>>>>>>> c6eb299 (.)
=======
>>>>>>> Stashed changes

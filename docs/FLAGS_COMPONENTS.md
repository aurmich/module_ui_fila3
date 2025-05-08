# Componenti SVG Bandiere nel Modulo UI

## Collegamenti correlati
- [Documentazione centrale](/docs/README.md)
- [Collegamenti documentazione](/docs/collegamenti-documentazione.md)
- [Documentazione UI](/laravel/Modules/UI/docs/README.md)
- [Documentazione sezioni](/docs/sections.md)
- [Header: Lingua e Utente](/laravel/Themes/One/docs/sections/HEADER_LANGUAGE_USER_DROPDOWN.md)
- [Implementazione CMS](/laravel/Modules/Cms/docs/sections/HEADER_LANGUAGE_USER_DROPDOWN.md)

## Panoramica

Il modulo UI di SaluteOra include una vasta collezione di SVG di bandiere nazionali che possono essere utilizzati come componenti Blade. Questi componenti sono autoregistrati e possono essere facilmente integrati in qualsiasi parte dell'applicazione, incluso il selettore di lingue nell'header.

## Struttura dei Componenti Bandiera

I file SVG delle bandiere sono archiviati in:
```
/var/www/html/saluteora/laravel/Modules/UI/resources/svg/flags/
```

Ogni bandiera è rappresentata da un file SVG con il codice ISO del paese come nome file (ad esempio, `it.svg` per l'Italia, `gb.svg` per il Regno Unito).

## Registrazione Automatica

I componenti SVG sono autoregistrati tramite il metodo `registerBladeIcons()` nel `XotBaseServiceProvider`. Questo metodo configura i set di icone Blade con il prefisso del modulo, consentendo di utilizzare i componenti SVG delle bandiere in qualsiasi vista Blade.

```php
public function registerBladeIcons(): void
{
    // ...
    $svgPath = module_path($this->name, $relativePath.'/../svg');
    // ...
    Config::set('blade-icons.sets.'.$this->nameLower.'.path', $svgPath);
    Config::set('blade-icons.sets.'.$this->nameLower.'.prefix', $this->nameLower);
}
```

## Utilizzo dei Componenti Bandiera

### Sintassi Base

I componenti SVG delle bandiere possono essere utilizzati con la seguente sintassi:

```blade
<x-ui-flags.it class="h-5 w-5" />
<x-ui-flags.gb class="h-5 w-5" />
<x-ui-flags.fr class="h-5 w-5" />
```

Dove:
- `ui` è il prefisso del modulo (in minuscolo)
- `flags` è la sottodirectory all'interno della cartella `svg`
- `it`, `gb`, `fr` sono i codici ISO dei paesi

### Attributi Supportati

I componenti SVG supportano tutti gli attributi HTML standard, inclusi:

- `class`: Per applicare classi CSS
- `style`: Per applicare stili inline
- `width` e `height`: Per dimensionare l'SVG
- `title`: Per aggiungere un titolo accessibile
- `aria-*`: Per migliorare l'accessibilità

### Esempio con Attributi

```blade
<x-ui-flags.it 
    class="h-6 w-6 rounded-full shadow-sm" 
    title="Italiano" 
    aria-label="Seleziona lingua italiana" 
/>
```

## Implementazione nel Selettore di Lingue

Per rendere il selettore di lingue nell'header più accattivante e visibile, è possibile utilizzare i componenti SVG delle bandiere al posto delle classi CSS `flag-icon`.

### Componente Selettore di Lingua Migliorato

File: `/laravel/Themes/One/resources/views/components/blocks/language-selector.blade.php`

```blade
@props(['languages' => []])

<div class="relative" x-data="{ open: false }">
    <button 
        @click="open = !open" 
        @click.away="open = false"
        class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500"
    >
        @php
            $currentLocale = app()->getLocale();
            $currentFlag = $currentLocale === 'en' ? 'gb' : $currentLocale;
        @endphp
        
        <div class="flex items-center justify-center w-6 h-6 overflow-hidden rounded-full border border-gray-200">
            <x-dynamic-component :component="'ui-flags.' . $currentFlag" class="w-7 h-7 object-cover" />
        </div>
        
        <span class="hidden md:inline">{{ $languages[$currentLocale]['name'] ?? ucfirst($currentLocale) }}</span>
        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-100" 
        x-transition:enter-start="transform opacity-0 scale-95" 
        x-transition:enter-end="transform opacity-100 scale-100" 
        x-transition:leave="transition ease-in duration-75" 
        x-transition:leave-start="transform opacity-100 scale-100" 
        x-transition:leave-end="transform opacity-0 scale-95" 
        class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 divide-y divide-gray-100"
    >
        <div class="py-1">
            @foreach($languages as $code => $language)
                @php
                    $flag = $code === 'en' ? 'gb' : $code;
                @endphp
                <a 
                    href="{{ url($code . substr(request()->getRequestUri(), 3)) }}" 
                    class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >
                    <div class="flex items-center justify-center w-6 h-6 overflow-hidden rounded-full border border-gray-200">
                        <x-dynamic-component :component="'ui-flags.' . $flag" class="w-7 h-7 object-cover" />
                    </div>
                    {{ $language['name'] }}
                </a>
            @endforeach
        </div>
    </div>
</div>
```

### Aggiornamento del JSON dell'Header

Per implementare il selettore di lingue migliorato, è necessario aggiornare il file JSON dell'header:

```json
{
    "name": {
        "it": "Selettore di Lingua",
        "en": "Language Selector"
    },
    "type": "language-selector",
    "data": {
        "view": "pub_theme::components.blocks.language-selector",
        "languages": [
            {
                "code": "it",
                "name": "Italiano",
                "flag": "it"
            },
            {
                "code": "en",
                "name": "English",
                "flag": "gb"
            },
            {
                "code": "fr",
                "name": "Français",
                "flag": "fr"
            },
            {
                "code": "de",
                "name": "Deutsch",
                "flag": "de"
            },
            {
                "code": "es",
                "name": "Español",
                "flag": "es"
            }
        ]
    }
}
```

## Vantaggi dell'Utilizzo dei Componenti SVG

1. **Qualità Visiva**: Gli SVG sono vettoriali e mantengono la qualità a qualsiasi dimensione
2. **Personalizzazione**: Facile da personalizzare con classi CSS
3. **Prestazioni**: Gli SVG sono leggeri e non richiedono richieste HTTP aggiuntive
4. **Accessibilità**: Possibilità di aggiungere attributi di accessibilità
5. **Coerenza**: Utilizzo di componenti nativi di SaluteOra

## Bandiere Disponibili

Il modulo UI include bandiere per tutti i paesi ISO, tra cui:

- `it.svg`: Italia
- `gb.svg`: Regno Unito
- `fr.svg`: Francia
- `de.svg`: Germania
- `es.svg`: Spagna
- `us.svg`: Stati Uniti
- ... e molti altri

## Conclusione

L'utilizzo dei componenti SVG delle bandiere del modulo UI è il modo più efficace per rendere il selettore di lingue nell'header più accattivante e visibile. Questi componenti sono già integrati in SaluteOra e possono essere facilmente utilizzati in qualsiasi parte dell'applicazione.

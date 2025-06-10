# Gestione delle Risorse Pubbliche

## Best Practices

1. **Utilizzo nei Template Blade**

   ```blade
   <img src="{{ asset('images/default-avatar.svg') }}" alt="Avatar utente">
   ```

   > **Nota**: La funzione `asset()` punta automaticamente alla directory pubblica corretta.

2. **Generazione di URL per Risorse Pubbliche**

   ```php
   $avatarUrl = asset('images/default-avatar.svg');
   ```

3. **Risorse Localizzate**

   Per risorse che variano in base alla lingua, utilizzare la struttura:

   ```
   /public_html/images/localized/{locale}/image.svg
   ```

   E accedervi con:

   ```php
   $localizedImage = asset('images/localized/' . LaravelLocalization::getCurrentLocale() . '/image.svg');
   ```

4. **Versionamento delle Risorse**

   Per gestire la cache del browser, aggiungere un parametro di versione:

   ```php
   $cssWithVersion = asset('css/app.css') . '?v=' . config('app.version');
   ```

5. **SVG vs Raster**

   - Preferire SVG per icone, loghi e illustrazioni vettoriali
   - Utilizzare WebP o JPEG ottimizzati per fotografie
   - Fornire fallback per browser più vecchi

## Esempi di Utilizzo

### Avatar Utente

```blade
<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
    class="h-10 w-10 rounded-full"
>
```

### Logo nell'Header

```blade
<a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route('home')) }}">
    <img 
        src="{{ asset('images/logos/project-logo.svg') }}" 
        alt="ProjectName" 
        class="h-8"
    >
</a>
```

### CSS e JavaScript

```blade
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
```

## Conclusione

Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto.

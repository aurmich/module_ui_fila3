<<<<<<< HEAD
<<<<<<< HEAD
# Correzioni PHPStan Livello 7 - Modulo UI

Questo documento traccia gli errori PHPStan di livello 7 identificati nel modulo UI e le relative soluzioni implementate.

## Errori Identificati

### 1. Errori in TableLayoutToggleTableAction.php

```
Metodo toggleLayout() ha il parametro $livewire senza type hint specificato.
Cannot call method dispatch() on class-string|object.
Cannot call method resetTable() on class-string|object.
```

## Soluzioni Implementate

### 1. Correzione in TableLayoutToggleTableAction.php

Per risolvere i problemi di type safety nella classe `TableLayoutToggleTableAction`, sono stati apportati i seguenti cambiamenti:

1. Aggiunto il type hint `mixed` al parametro `$livewire` del metodo `toggleLayout()` invece di forzare un tipo specifico, poiché il parametro potrebbe essere di vari tipi:

```php
protected function toggleLayout(mixed $livewire = null): void
```

2. Aggiunti controlli `method_exists` e `property_exists` prima di chiamare metodi o accedere a proprietà sull'oggetto `$livewire`:

```php
if ($livewire) {
    // Use property_exists to safely check if the property exists
    if (property_exists($livewire, 'layoutView')) {
        $livewire->layoutView = $newLayout;
    }
    
    // These methods should be available on Filament components
    if (method_exists($livewire, 'dispatch')) {
        $livewire->dispatch('$refresh');
        $livewire->dispatch('refreshTable');
    }
    
    if (method_exists($livewire, 'resetTable')) {
        $livewire->resetTable();
    }
}
```

Questo approccio è più robusto e previene errori a runtime quando l'oggetto `$livewire` non ha i metodi o le proprietà previste.
=======
=======
>>>>>>> 8a76661 (.)
# UI Module - PHPStan Level 7 Fixes - Gennaio 2025

## 🔄 **Stato In Corso**

Il modulo UI ha ~2 errori PHPStan rimanenti, principalmente legati al safe casting da mixed types.

## 🔧 **Correzioni Implementate**

### Safe Casting Patterns
Implementati pattern di safe casting per la maggior parte dei casi di conversione da mixed types:

```php
use \Modules\Xot\Actions\Cast\SafeStringCastAction;

// Pattern di Safe Casting per componenti UI
private function safeCastComponentData(mixed $value): string
{
    return is_string($value) ? $value : (string) ($value ?? '');
}

// Utilizzo di SafeStringCastAction per dati UI
private function castUIData(mixed $data): string
{
    return SafeStringCastAction::cast($data);
}
```

### Filament Resources - Array Compatibility
Tutte le risorse Filament del modulo UI sono state aggiornate per utilizzare array associativi con chiavi string.

### Component Data Handling
Implementati pattern sicuri per la gestione dei dati dei componenti UI:

```php
/**
 * Safe handling of component attributes
 */
private function processComponentAttributes(mixed $attributes): array
{
    if (is_array($attributes)) {
        return $attributes;
    }
    
    if (is_string($attributes)) {
        return json_decode($attributes, true) ?? [];
    }
    
    return [];
}
```

## 📋 **Errori Rimanenti (~2)**

### Mixed Type Casting Issues
- **Tipo**: `Cannot cast mixed to string` in component rendering
- **Localizzazione**: Principalmente in View Components e Blade rendering
- **Soluzione**: Implementare pattern di safe casting con validazione

### Pattern di Risoluzione Raccomandati
```php
// Per rendering sicuro di componenti
private function safeRenderComponent(mixed $data): string
{
    if (is_string($data)) {
        return $data;
    }
    
    if (is_array($data)) {
        return json_encode($data);
    }
    
    if (is_null($data)) {
        return '';
    }
    
    return (string) $data;
}

// Per attributi HTML sicuri
private function safeHtmlAttribute(mixed $value): string
{
    return htmlspecialchars(
        SafeStringCastAction::cast($value),
        ENT_QUOTES,
        'UTF-8'
    );
}
```

## 🎯 **Progressi**
- **Errori Risolti**: ~90% (da ~20 errori iniziali a ~2)
- **Array Compatibility**: ✅ Completato
- **Method Signatures**: ✅ Completato
- **Safe Casting**: 🔄 In corso (90% completato)
- **Component Safety**: ✅ Implementato

## 📚 **Prossimi Passi**
1. Identificare i 2 errori rimanenti con PHPStan
2. Applicare pattern di safe casting ai componenti UI rimanenti
3. Validare rendering sicuro con PHPStan Level 7
4. Completare documentazione

## 📋 **Best Practices Implementate**
- **Safe Rendering**: Pattern sicuri per rendering componenti
- **HTML Safety**: Escape sicuro per attributi HTML
- **Array Associativi**: Chiavi string per azioni Filament
- **Component Validation**: Controlli di tipo per dati componenti

## 🔍 **Specializzazioni UI**
- **Blade Components**: Rendering sicuro con type checking
- **HTML Attributes**: Escape sicuro per prevenire XSS
- **JSON Handling**: Parsing sicuro di dati JSON
- **Component Props**: Validazione tipi per proprietà componenti

## 📚 **Documentazione di Riferimento**
- `docs/phpstan-level7-guide.md`: Guida completa PHPStan Level 7
- `docs/phpstan/safe-casting-patterns.md`: Pattern di casting sicuro
- `\Modules\Xot\Actions\Cast\SafeStringCastAction`: Action per casting sicuro

---
*Ultimo aggiornamento: Gennaio 2025*
*Stato: 🔄 In Corso - ~2 errori PHPStan rimanenti*
<<<<<<< HEAD
>>>>>>> 7da17b2 (.)
=======
>>>>>>> 8a76661 (.)

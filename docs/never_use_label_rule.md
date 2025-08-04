# Regola Critica: MAI Usare ->label() nella Documentazione

## Data: 2025-01-06

## REGOLA ASSOLUTA
**MAI scrivere esempi con `->label()`, `->placeholder()`, o `->helperText()` nella documentazione**

## Motivazione
- La documentazione serve come esempio per gli sviluppatori
- Esempi sbagliati portano a implementazioni sbagliate
- Il sistema di traduzioni automatico gestisce tutto
- Coerenza con le convenzioni del progetto

## Pattern Corretto per Documentazione

### ✅ CORRETTO - Esempi nella Documentazione
```php
// ✅ CORRETTO - Solo make() senza ->label()
TextColumn::make('name')
    ->searchable()
    ->sortable(),

TextInput::make('email')
    ->required(),

Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ]),
```

### ❌ ERRATO - Esempi nella Documentazione
```php
// ❌ MAI scrivere questo nella documentazione
TextColumn::make('name')
    ->label('Nome')  // VIETATO
    ->placeholder('Inserisci nome')  // VIETATO
    ->helperText('Nome completo')  // VIETATO
```

## File di Traduzione Obbligatori

### Struttura Corretta
```php
// Modules/UI/lang/it/fields.php
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci nome',
        'tooltip' => 'Nome completo dell\'utente',
        'helper_text' => 'Nome e cognome dell\'utente',
    ],
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci email',
        'tooltip' => 'Indirizzo email dell\'utente',
        'helper_text' => 'Email valida per le comunicazioni',
    ],
];
```

## Controllo Automatico

Prima di pubblicare qualsiasi documentazione, verificare:

- [ ] Nessun `->label()` negli esempi
- [ ] Nessun `->placeholder()` negli esempi
- [ ] Nessun `->helperText()` negli esempi
- [ ] Tutti gli esempi usano solo `TextColumn::make('name')`
- [ ] File di traduzione esistono e sono completi
- [ ] Struttura espansa per tutti i campi

## Penalità per Violazioni

- **ERRORE CRITICO**: Esempi sbagliati nella documentazione
- Rischio di perdita di coerenza
- Difficoltà di manutenzione
- Problemi di localizzazione
- Violazione delle convenzioni del progetto

## Esempi di Controllo

### Controllo Automatico con grep
```bash
# Cerca ->label() nella documentazione
grep -r "->label(" Modules/UI/docs/ --include="*.md"

# Cerca ->placeholder() nella documentazione
grep -r "->placeholder(" Modules/UI/docs/ --include="*.md"

# Cerca ->helperText() nella documentazione
grep -r "->helperText(" Modules/UI/docs/ --include="*.md"
```

### Controllo Manuale
Prima di ogni commit di documentazione:
1. Leggere tutti gli esempi di codice
2. Verificare che non ci siano `->label()`
3. Verificare che non ci siano `->placeholder()`
4. Verificare che non ci siano `->helperText()`
5. Verificare che tutti gli esempi usino solo `make()`

## Collegamenti

- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [UI Module Architecture](architecture_rules.md)
- [Table Components](table-components.md)

---

**ULTIMO AGGIORNAMENTO**: 2025-01-06
**REGOLA CRITICA**: DA RICORDARE SEMPRE
**PENALITÀ**: ERRORE CRITICO per violazioni 
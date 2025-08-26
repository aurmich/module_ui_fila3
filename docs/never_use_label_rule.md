<<<<<<< HEAD
# REGOLA CRITICA: MAI usare ->label()

## Data: 2025-01-06

## ❌ ERRORE CRITICO - NON FARE MAI QUESTO

```php
// ❌ ERRORE - Non usare mai ->label()
TextColumn::make('name')->label('Nome')
Action::make('save')->label('Salva')
Select::make('status')->label('Stato')
TextInput::make('email')->label('Email')
```

## ✅ CORRETTO - Sistema Traduzioni Automatico

```php
// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
Action::make('save')
Select::make('status')
TextInput::make('email')
```

## Perché questa Regola è Critica

### 1. Sistema Traduzioni Automatico
- Il `LangServiceProvider` gestisce automaticamente le traduzioni
- Le chiavi vengono generate automaticamente dal nome del campo
- Struttura: `modulo::risorsa.fields.campo.label`

### 2. Centralizzazione
- Tutte le traduzioni sono nei file `lang/`
- Facile manutenzione e aggiornamento
- Sincronizzazione automatica tra lingue

### 3. Type Safety
- Previene errori di digitazione nelle label
- Controllo automatico delle traduzioni mancanti
- PHPStan può verificare la presenza delle chiavi

### 4. Performance
- Nessun overhead di chiamate `__()` manuali
- Cache delle traduzioni ottimizzata
- Meno codice da mantenere

## Implementazione Corretta

### 1. Prima di usare un componente, implementa le traduzioni

```php
// File: Modules/User/lang/it/fields.php
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
=======
# Never Use ->label() Rule in Filament Components

## Overview

This document establishes a critical rule for all Filament components in Laraxot projects: **NEVER use `->label()` method in form components**. All labels, placeholders, and help text must come from translation files.

## The Rule

### ❌ NEVER DO THIS
```php
// WRONG - Hardcoded labels
Forms\Components\TextInput::make('name')
    ->label('Nome')
    ->placeholder('Inserisci il nome')
    ->helperText('Inserisci il nome completo');

Forms\Components\Select::make('status')
    ->label('Stato')
    ->options([
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
    ]);
```

### ✅ ALWAYS DO THIS
```php
// CORRECT - No labels, translations handled automatically
Forms\Components\TextInput::make('name');
Forms\Components\Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ]);
```

## Why This Rule Exists

### 1. **Centralized Localization**
- All user-facing text is managed in translation files
- Easy to add new languages
- Consistent terminology across the application
- Single source of truth for all text

### 2. **Maintainability**
- No need to search through code for hardcoded strings
- Changes to text only require updating translation files
- Easier to maintain consistency across components
- Reduced risk of typos or inconsistencies

### 3. **Laraxot Framework Integration**
- Laraxot automatically handles translations
- LangServiceProvider manages label resolution
- Consistent behavior across all modules
- Framework-level optimization

### 4. **Code Quality**
- Cleaner, more readable code
- Separation of concerns (logic vs. presentation)
- Easier to test and maintain
- Better adherence to SOLID principles

## How It Works

### 1. **Automatic Label Resolution**
When you create a form component:
```php
Forms\Components\TextInput::make('name')
```

Laraxot automatically looks for translations in this order:
1. `Modules/ModuleName/lang/{locale}/fields.php` → `fields.name.label`
2. `Modules/ModuleName/lang/{locale}/filament/resources/resource-name.php` → `fields.name.label`
3. Fallback to field name if no translation found

### 2. **Translation File Structure**
```php
// Modules/ModuleName/lang/it/fields.php
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci il nome',
        'help' => 'Inserisci il nome completo',
    ],
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci l\'email',
        'help' => 'L\'email verrà utilizzata per l\'accesso',
>>>>>>> 20c12a7 (.)
    ],
];
```

<<<<<<< HEAD
### 2. Poi usa il componente senza ->label()

```php
// ✅ CORRETTO
TextColumn::make('name')
TextColumn::make('email')
```

## Esempi di Errori Comuni

### ❌ ERRORE - Label hardcoded
```php
TextColumn::make('user_name')->label('Nome Utente')
```

### ✅ CORRETTO - Traduzione automatica
```php
// Prima implementa in lang/it/fields.php
'user_name' => [
    'label' => 'Nome Utente',
    // ...
],

// Poi usa senza ->label()
TextColumn::make('user_name')
```

### ❌ ERRORE - Label in inglese
```php
TextColumn::make('status')->label('Status')
```

### ✅ CORRETTO - Traduzione italiana
```php
// Prima implementa in lang/it/fields.php
'status' => [
    'label' => 'Stato',
    // ...
],

// Poi usa senza ->label()
TextColumn::make('status')
```

## Checklist Pre-Implementazione

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8727c5b (.)
### Prima di usare un componente Filament:
- [ ] Implementare traduzioni in `lang/it/fields.php`
- [ ] Implementare traduzioni in `lang/en/fields.php`
- [ ] Implementare traduzioni in `lang/de/fields.php`
- [ ] Verificare che le chiavi siano corrette
- [ ] Testare che le traduzioni funzionino

### Prima di committare:
- [ ] Verificare che non ci siano `->label()` nel codice
- [ ] Controllare che tutte le traduzioni siano implementate
- [ ] Testare che le traduzioni funzionino correttamente
=======
>>>>>>> 41f976e (.)
<<<<<<< HEAD
=======
>>>>>>> 51da2b43 (.)
=======
>>>>>>> 8727c5b (.)
=======
>>>>>>> f89ff0a (.)
Prima di usare qualsiasi componente Filament:

- [ ] Implementare traduzioni in `lang/it/fields.php`
- [ ] Implementare traduzioni in `lang/en/fields.php`
- [ ] Implementare traduzioni in `lang/de/fields.php`
- [ ] Verificare struttura espansa (label, placeholder, tooltip, helper_text)
- [ ] Non usare mai `->label()` nel codice

## Verifica Automatica

### PHPStan Rule (Ideale)
```php
// Regola PHPStan per rilevare ->label()
// Implementare in phpstan.neon
rules:
    - rule: Never use ->label() in Filament components
```

### Code Review Checklist
- [ ] Nessun `->label()` nel codice
- [ ] Tutte le traduzioni implementate
- [ ] Struttura espansa completa
- [ ] Sincronizzazione IT/EN/DE

## Penalità per Violazioni

### Livello 1 - Warning
- Commento nel code review
- Richiesta di correzione

### Livello 2 - Blocco
- Blocco del merge
- Correzione obbligatoria

### Livello 3 - Sanzione
- Documentazione della violazione
- Training obbligatorio

## Collegamenti

- [Translation Standards](../../../docs/translation-standards.md)
- [Filament Best Practices](../../../docs/filament-best-practices.md)
- [LangServiceProvider Documentation](../../../docs/lang-service-provider.md)

## Memoria Permanente

**RICORDA SEMPRE**: 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8727c5b (.)
- MAI usare `->label()` in componenti Filament
- SEMPRE implementare traduzioni nei file `lang/`
- SEMPRE sincronizzare IT/EN/DE
- SEMPRE testare le traduzioni prima del commit
=======
>>>>>>> 41f976e (.)
<<<<<<< HEAD
=======
>>>>>>> 51da2b43 (.)
=======
>>>>>>> 8727c5b (.)
=======
>>>>>>> f89ff0a (.)
- MAI `->label()` 
- SEMPRE traduzioni nei file lang/
- SEMPRE struttura espansa
- SEMPRE sincronizzazione IT/EN/DE

*Ultimo aggiornamento: 2025-01-06*
=======
### 3. **Resource-Specific Translations**
```php
// Modules/ModuleName/lang/it/filament/resources/user-resource.php
return [
    'fields' => [
        'name' => [
            'label' => 'Nome Utente',
            'placeholder' => 'Inserisci il nome utente',
            'help' => 'Nome completo dell\'utente',
        ],
    ],
];
```

## Implementation Examples

### 1. **Basic Form Fields**
```php
/**
 * @return array<string, \Filament\Forms\Components\Component>
 */
public static function getFormSchema(): array
{
    return [
        'name' => Forms\Components\TextInput::make('name')
            ->required()
            ->maxLength(255),
        
        'email' => Forms\Components\TextInput::make('email')
            ->email()
            ->required()
            ->unique(ignoreRecord: true),
        
        'status' => Forms\Components\Select::make('status')
            ->options([
                'active' => 'Active',
                'inactive' => 'Inactive',
            ])
            ->required(),
    ];
}
```

### 2. **Complex Form Components**
```php
'address' => Forms\Components\Section::make()
    ->schema([
        'street' => Forms\Components\TextInput::make('street'),
        'city' => Forms\Components\TextInput::make('city'),
        'postal_code' => Forms\Components\TextInput::make('postal_code'),
        'country' => Forms\Components\Select::make('country_id')
            ->relationship('country', 'name')
            ->searchable()
            ->preload(),
    ]),
```

### 3. **Table Columns**
```php
public function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            
            Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
            
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'success' => 'active',
                    'danger' => 'inactive',
                ]),
        ]);
}
```

## Translation File Organization

### 1. **Module-Level Translations**
```
Modules/ModuleName/lang/it/
├── fields.php              # Common field translations
├── actions.php             # Common action translations
├── messages.php            # Common messages
└── filament/
    └── resources/
        └── resource-name.php  # Resource-specific translations
```

### 2. **Field Translation Structure**
```php
return [
    'fields' => [
        'field_name' => [
            'label' => 'Field Label',
            'placeholder' => 'Field Placeholder',
            'help' => 'Field Help Text',
            'validation' => [
                'required' => 'This field is required',
                'email' => 'Please enter a valid email',
            ],
        ],
    ],
];
```

### 3. **Action Translation Structure**
```php
return [
    'actions' => [
        'action_name' => [
            'label' => 'Action Label',
            'modal_heading' => 'Modal Heading',
            'modal_description' => 'Modal Description',
            'success' => 'Success Message',
            'error' => 'Error Message',
        ],
    ],
];
```

## Common Mistakes and Solutions

### 1. **Mistake: Hardcoded Labels**
```php
// ❌ WRONG
Forms\Components\TextInput::make('name')
    ->label('Nome')
    ->placeholder('Inserisci il nome');
```

**Solution**: Remove all `->label()`, `->placeholder()`, and `->helperText()` calls and add translations to the appropriate language file.

### 2. **Mistake: Inline Translations**
```php
// ❌ WRONG
Forms\Components\TextInput::make('name')
    ->label(__('modulename::fields.name.label'))
    ->placeholder(__('modulename::fields.name.placeholder'));
```

**Solution**: Remove all translation calls - Laraxot handles this automatically.

### 3. **Mistake: Mixed Approaches**
```php
// ❌ WRONG
Forms\Components\TextInput::make('name');  // No label
Forms\Components\TextInput::make('email')
    ->label('Email');  // Has label
```

**Solution**: Remove all labels and ensure all translations are in language files.

## Validation and Testing

### 1. **Pre-Commit Checks**
Before committing code:
- [ ] No `->label()` calls in form components
- [ ] No `->placeholder()` calls in form components
- [ ] No `->helperText()` calls in form components
- [ ] All text is in translation files
- [ ] Translation keys follow naming conventions

### 2. **Automated Testing**
```php
public function test_form_components_have_no_hardcoded_labels(): void
{
    $resource = new ExampleResource();
    $schema = $resource->getFormSchema();
    
    foreach ($schema as $field) {
        // Verify no label, placeholder, or helperText methods
        $this->assertNull($field->getLabel());
        $this->assertNull($field->getPlaceholder());
        $this->assertNull($field->getHelperText());
    }
}
```

### 3. **PHPStan Rules**
Consider adding PHPStan rules to detect hardcoded labels:
```neon
# phpstan.neon.dist
parameters:
    rules:
        - Laraxot\PHPStan\Rules\NoHardcodedLabelsRule
```

## Benefits of Following This Rule

### 1. **Developer Experience**
- Cleaner, more readable code
- Easier to maintain and update
- Consistent patterns across components
- Better separation of concerns

### 2. **User Experience**
- Consistent terminology across the application
- Easy to add new languages
- Professional, polished interface
- Better accessibility

### 3. **Project Quality**
- Easier onboarding for new developers
- Consistent codebase
- Better maintainability
- Reduced technical debt

## Migration Guide

### 1. **Identify Hardcoded Labels**
```bash
# Search for hardcoded labels
grep -r "->label(" app/ Modules/
grep -r "->placeholder(" app/ Modules/
grep -r "->helperText(" app/ Modules/
```

### 2. **Create Translation Files**
- Add missing translations to appropriate language files
- Follow the established structure
- Use consistent terminology

### 3. **Remove Hardcoded Labels**
- Remove all `->label()` calls
- Remove all `->placeholder()` calls
- Remove all `->helperText()` calls

### 4. **Test and Verify**
- Ensure all labels appear correctly
- Test with different languages
- Verify no broken references

## Links to Related Documentation

- [Filament Best Practices](../../Xot/docs/filament-best-practices.md)
- [Translation Best Practices](../../Xot/docs/translations-best-practices.md)
- [Code Quality Standards](../../Xot/docs/code-quality.md)
- [Module Structure Standards](../../Xot/docs/module-structure.md)

---

*Never Use ->label() Rule - Ensuring Consistent and Maintainable Filament Components*
>>>>>>> 20c12a7 (.)

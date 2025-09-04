# Componenti Volt

## Panoramica
Volt è un framework per la creazione di componenti Livewire in modo dichiarativo. Questa guida spiega come utilizzare Volt nel nostro sistema.

## Collegamenti
- [Documentazione Volt](https://livewire.laravel.com/project_docs/volt)
- [Livewire](https://livewire.laravel.com)
- [Filament](https://filamentphp.com)
- [Documentazione UI](../README.md)
- [Best Practices](../best-practices.md)
- [Layout](../layouts.md)
- [Temi](../themes.md)

## Struttura Base

### Componente Base
```php
<?php

use function Livewire\Volt\{state, mount};

state([
    'name' => '',
    'email' => '',
]);

$submit = function() {
    // logica di submit
};

?>

<form wire:submit="submit">
    <input type="text" wire:model="name">
    <input type="email" wire:model="email">
    <button type="submit">Invia</button>
</form>
```

## Stati e Proprietà

### Definizione Stati
```php
state([
    'count' => 0,
    'items' => [],
    'isLoading' => false,
]);
```

### Proprietà Computate
```php
$total = fn() => count($this->items);

$filteredItems = fn() => collect($this->items)
    ->filter(fn($item) => $item['active'])
    ->values()
    ->toArray();
```

## Metodi e Azioni

### Metodi Base
```php
$increment = function() {
    $this->count++;
};

$addItem = function($item) {
    $this->items[] = $item;
};
```

### Azioni con Parametri
```php
$updateItem = function($id, $data) {
    $this->items[$id] = $data;
};
```

## Ciclo di Vita

### Hook
```php
mount(function() {
    // inizializzazione
});

updated(function($property, $value) {
    // dopo l'aggiornamento di una proprietà
});

hydrated(function() {
    // dopo l'idratazione
});
```

## Eventi

### Emettere Eventi
```php
$notify = function($message) {
    $this->dispatch('notify', message: $message);
};
```

### Ascoltare Eventi
```php
$listeners = [
    'refresh' => 'refreshData',
];

$refreshData = function() {
    // logica di refresh
};
```

## Validazione

### Regole di Validazione
```php
$rules = [
    'name' => 'required|min:3',
    'email' => 'required|email',
];

$messages = [
    'name.required' => 'Il nome è obbligatorio',
    'email.email' => 'Email non valida',
];
```

### Validazione Manuale
```php
$validateData = function() {
    $this->validate();
    // logica dopo la validazione
};
```

## Interazione con il DOM

### Modificare il DOM
```php
$showModal = function() {
    $this->dispatch('show-modal');
};
```

### Gestire Eventi DOM
```php
$handleClick = function($event) {
    // logica di gestione click
};
```

## Best Practices

### Organizzazione
1. Raggruppare stati correlati
2. Separare logica di business
3. Utilizzare proprietà computate
4. Documentare componenti complessi

### Performance
1. Minimizzare gli stati
2. Utilizzare lazy loading
3. Ottimizzare re-render
4. Caching quando appropriato

### Sicurezza
1. Validare input
2. Sanitizzare output
3. Proteggere dati sensibili
4. Gestire errori

## Esempi Pratici

### Form di Login
```php
<?php

use function Livewire\Volt\{state, mount};

state([
    'email' => '',
    'password' => '',
    'remember' => false,
]);

$rules = [
    'email' => 'required|email',
    'password' => 'required|min:8',
];

$login = function() {
    $this->validate();
    
    if (auth()->attempt([
        'email' => $this->email,
        'password' => $this->password,
    ], $this->remember)) {
        return redirect()->intended('/dashboard');
    }
    
    $this->addError('email', 'Credenziali non valide');
};

?>

<form wire:submit="login">
    <input type="email" wire:model="email">
    <input type="password" wire:model="password">
    <label>
        <input type="checkbox" wire:model="remember">
        Ricordami
    </label>
    <button type="submit">Accedi</button>
</form>
```

### Lista Todo
```php
<?php

use function Livewire\Volt\{state, mount};

state([
    'todos' => [],
    'newTodo' => '',
]);

$addTodo = function() {
    $this->validate(['newTodo' => 'required|min:3']);
    
    $this->todos[] = [
        'id' => uniqid(),
        'text' => $this->newTodo,
        'completed' => false,
    ];
    
    $this->newTodo = '';
};

$toggleTodo = function($id) {
    foreach ($this->todos as &$todo) {
        if ($todo['id'] === $id) {
            $todo['completed'] = !$todo['completed'];
            break;
        }
    }
};

$removeTodo = function($id) {
    $this->todos = array_filter($this->todos, fn($todo) => $todo['id'] !== $id);
};

?>

<div>
    <form wire:submit="addTodo">
        <input type="text" wire:model="newTodo">
        <button type="submit">Aggiungi</button>
    </form>
    
    <ul>
        @foreach($todos as $todo)
            <li>
                <input type="checkbox" 
                       wire:click="toggleTodo({{ $todo['id'] }})"
                       {{ $todo['completed'] ? 'checked' : '' }}>
                <span>{{ $todo['text'] }}</span>
                <button wire:click="removeTodo({{ $todo['id'] }})">Rimuovi</button>
            </li>
        @endforeach
    </ul>
</div>
```

## Integrazione con Filament

### Widget Volt
```php
<?php

use function Livewire\Volt\{state, mount};

state([
    'stats' => [],
]);

mount(function() {
    $this->stats = [
        'users' => User::count(),
        'posts' => Post::count(),
        'comments' => Comment::count(),
    ];
});

?>

<div class="grid grid-cols-3 gap-4">
    @foreach($stats as $key => $value)
        <div class="p-4 bg-white rounded-lg shadow">
            <h3 class="text-lg font-semibold">{{ ucfirst($key) }}</h3>
            <p class="text-2xl font-bold">{{ $value }}</p>
        </div>
    @endforeach
</div>
```

## Risoluzione Problemi

### Errori Comuni
1. Stati non aggiornati
2. Eventi non gestiti
3. Validazione fallita
4. Performance scadenti

### Debug
1. Utilizzare `@dump()`
2. Controllare console browser
3. Verificare network requests
4. Monitorare re-render

## Collegamenti Moduli

### Modulo Xot
- [Core](../../Xot/project_docs/core.md)
- [Servizi](../../Xot/project_docs/services.md)
- [Traits](../../Xot/project_docs/traits.md)
- [Best Practices](../../Xot/project_docs/best-practices.md)

### Modulo Cms
- [Frontend](../../Cms/project_docs/frontend.md)
- [Temi](../../Cms/project_docs/themes.md)
- [Contenuti](../../Cms/project_docs/content.md)
- [Convenzioni Filament](../../Cms/project_docs/convenzioni-namespace-filament.md)

### Modulo Lang
- [Traduzioni](../../Lang/project_docs/translations.md)
- [Localizzazione](../../Lang/project_docs/localization.md)
- [API Traduzioni](../../Lang/project_docs/api.md)

### Modulo User
- [Autenticazione](../../User/project_docs/auth.md)
- [Permessi](../../User/project_docs/permissions.md)
- [Profilo](../../User/project_docs/profile.md)

### Modulo Patient
- [Gestione Pazienti](../../Patient/project_docs/patients.md)
- [Cartelle Cliniche](../../Patient/project_docs/records.md)
- [Appuntamenti](../../Patient/project_docs/appointments.md)

### Modulo Dental
- [Trattamenti](../../Dental/project_docs/treatments.md)
- [Pianificazione](../../Dental/project_docs/planning.md)
- [Documenti](../../Dental/project_docs/documents.md)

### Modulo Tenant
- [Multi-tenant](../../Tenant/project_docs/multi-tenant.md)
- [Configurazione](../../Tenant/project_docs/configuration.md)
- [Migrazione](../../Tenant/project_docs/migration.md)

### Modulo Media
- [Gestione File](../../Media/project_docs/files.md)
- [Upload](../../Media/project_docs/upload.md)
- [Storage](../../Media/project_docs/storage.md)

### Modulo Notify
- [Notifiche](../../Notify/project_docs/notifications.md)
- [Email](../../Notify/project_docs/email.md)
- [SMS](../../Notify/project_docs/sms.md)

### Modulo Reporting
- [Report](../../Reporting/project_docs/reports.md)
- [Esportazione](../../Reporting/project_docs/export.md)
- [Analytics](../../Reporting/project_docs/analytics.md)

### Modulo Gdpr
- [Privacy](../../Gdpr/project_docs/privacy.md)
- [Consensi](../../Gdpr/project_docs/consents.md)
- [Sicurezza](../../Gdpr/project_docs/security.md)

### Modulo Job
- [Jobs](../../Job/project_docs/jobs.md)
- [Queue](../../Job/project_docs/queue.md)
- [Scheduling](../../Job/project_docs/scheduling.md)

### Modulo Chart
- [Grafici](../../Chart/project_docs/charts.md)
- [Dashboard](../../Chart/project_docs/dashboard.md)
- [Visualizzazione](../../Chart/project_docs/visualization.md) 
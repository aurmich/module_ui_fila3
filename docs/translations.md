# Traduzioni del Modulo UI

## Collegamenti

- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale sulle traduzioni
- [Regole Generali Traduzioni](../../Xot/docs/translations.md)

## Struttura

```
Modules/UI/
└── lang/
    ├── it/
    │   └── ui.php
    └── en/
        └── ui.php
```

## Contenuto

Il file `ui.php` contiene le traduzioni per:
- Componenti base
- Widget
- Layout
- Temi
- Stili
- Icone
- Messaggi di sistema
- Errori
- Avvisi

## Esempi

```php
return [
    'components' => [
        'button' => [
            'label' => 'Pulsante',
            'tooltip' => 'Clicca per eseguire un\'azione'
        ],
        'input' => [
            'label' => 'Campo di input',
            'tooltip' => 'Inserisci il testo'
        ]
    ],
    'messages' => [
        'success' => 'Operazione completata con successo',
        'error' => 'Si è verificato un errore',
        'warning' => 'Attenzione'
    ]
];
``` 
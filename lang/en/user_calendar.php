<?php

<<<<<<< HEAD
return [
    'months' => [
        'long' => [
            '0' => 'Gennaio',
            '1' => 'Febbraio',
            '2' => 'Marzo',
            '3' => 'Aprile',
            '4' => 'Maggio',
            '5' => 'Giugno',
            '6' => 'Luglio',
            '7' => 'Agosto',
            '8' => 'Settembre',
            '9' => 'Ottobre',
            '10' => 'Novembre',
            '11' => 'Dicembre',
        ],
        'short' => [
            '0' => 'Gen',
            '1' => 'Feb',
            '2' => 'Mar',
            '3' => 'Apr',
            '4' => 'Mag',
            '5' => 'Giu',
            '6' => 'Lug',
            '7' => 'Ago',
            '8' => 'Set',
            '9' => 'Ott',
            '10' => 'Nov',
            '11' => 'Dic',
=======
declare(strict_types=1);

return [
    'months' => [
        'long' => [
            '0' => 'January',
            '1' => 'February',
            '2' => 'March',
            '3' => 'April',
            '4' => 'May',
            '5' => 'June',
            '6' => 'July',
            '7' => 'August',
            '8' => 'September',
            '9' => 'October',
            '10' => 'November',
            '11' => 'December',
        ],
        'short' => [
            '0' => 'Jan',
            '1' => 'Feb',
            '2' => 'Mar',
            '3' => 'Apr',
            '4' => 'May',
            '5' => 'Jun',
            '6' => 'Jul',
            '7' => 'Aug',
            '8' => 'Sep',
            '9' => 'Oct',
            '10' => 'Nov',
            '11' => 'Dec',
>>>>>>> beb3f44 (.)
        ],
    ],
    'weekdays' => [
        'long' => [
<<<<<<< HEAD
            '0' => 'Domenica',
            '1' => 'Lunedì',
            '2' => 'Martedì',
            '3' => 'Mercoledì',
            '4' => 'Giovedì',
            '5' => 'Venerdì',
            '6' => 'Sabato',
        ],
        'short' => [
            '0' => 'Dom',
            '1' => 'Lun',
            '2' => 'Mar',
            '3' => 'Mer',
            '4' => 'Gio',
            '5' => 'Ven',
            '6' => 'Sab',
        ],
        'min' => [
            '0' => 'Do',
            '1' => 'Lu',
            '2' => 'Ma',
            '3' => 'Me',
            '4' => 'Gi',
            '5' => 'Ve',
=======
            '0' => 'Sunday',
            '1' => 'Monday',
            '2' => 'Tuesday',
            '3' => 'Wednesday',
            '4' => 'Thursday',
            '5' => 'Friday',
            '6' => 'Saturday',
        ],
        'short' => [
            '0' => 'Sun',
            '1' => 'Mon',
            '2' => 'Tue',
            '3' => 'Wed',
            '4' => 'Thu',
            '5' => 'Fri',
            '6' => 'Sat',
        ],
        'min' => [
            '0' => 'Su',
            '1' => 'Mo',
            '2' => 'Tu',
            '3' => 'We',
            '4' => 'Th',
            '5' => 'Fr',
>>>>>>> beb3f44 (.)
            '6' => 'Sa',
        ],
    ],
    'buttons' => [
<<<<<<< HEAD
        'previous' => 'Mese precedente',
        'next' => 'Mese successivo',
        'today' => 'Oggi',
        'cancel' => 'Annulla',
        'save' => 'Salva',
        'close' => 'Chiudi',
    ],
    'labels' => [
        'today' => 'Oggi',
        'all_day' => 'Tutto il giorno',
        'no_events' => 'Nessun evento programmato',
        'loading' => 'Caricamento in corso...',
    ],
    'fields' => [
        'title' => [
            'label' => 'Titolo',
            'placeholder' => 'Inserisci un titolo',
            'helper_text' => 'Inserisci un titolo descrittivo',
            'description' => 'Titolo dell\'evento',
        ],
        'starts_at' => [
            'label' => 'Inizio',
            'placeholder' => 'Seleziona data e ora di inizio',
            'helper_text' => 'Data e ora di inizio dell\'evento',
            'description' => 'Data e ora di inizio',
        ],
        'ends_at' => [
            'label' => 'Fine',
            'placeholder' => 'Seleziona data e ora di fine',
            'helper_text' => 'Data e ora di fine dell\'evento',
            'description' => 'Data e ora di fine',
=======
        'previous' => 'Previous month',
        'next' => 'Next month',
        'today' => 'Today',
        'cancel' => 'Cancel',
        'save' => 'Save',
        'close' => 'Close',
    ],
    'labels' => [
        'today' => 'Today',
        'all_day' => 'All day',
        'no_events' => 'No scheduled events',
        'loading' => 'Loading...',
    ],
    'fields' => [
        'title' => [
            'label' => 'Title',
            'placeholder' => 'Enter a title',
            'helper_text' => 'Enter a descriptive title',
            'description' => 'Event title',
        ],
        'starts_at' => [
            'label' => 'Start',
            'placeholder' => 'Select start date and time',
            'helper_text' => 'Event start date and time',
            'description' => 'Start date and time',
        ],
        'ends_at' => [
            'label' => 'End',
            'placeholder' => 'Select end date and time',
            'helper_text' => 'Event end date and time',
            'description' => 'End date and time',
>>>>>>> beb3f44 (.)
        ],
    ],
    'actions' => [
        'delete' => [
<<<<<<< HEAD
            'label' => 'Elimina',
            'confirm' => 'Sei sicuro di voler eliminare questo evento?',
            'success' => 'Evento eliminato con successo',
            'error' => 'Errore durante l\'eliminazione dell\'evento',
        ],
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Modifiche salvate con successo',
            'error' => 'Errore durante il salvataggio delle modifiche',
        ],
        'create' => [
            'label' => 'Nuovo evento',
            'success' => 'Evento creato con successo',
            'error' => 'Errore durante la creazione dell\'evento',
        ],
    ],
    'validation' => [
        'required' => 'Questo campo è obbligatorio',
        'date' => 'Inserisci una data valida',
        'after' => 'La data di fine deve essere successiva alla data di inizio',
=======
            'label' => 'Delete',
            'confirm' => 'Are you sure you want to delete this event?',
            'success' => 'Event deleted successfully',
            'error' => 'Error deleting event',
        ],
        'edit' => [
            'label' => 'Edit',
            'success' => 'Changes saved successfully',
            'error' => 'Error saving changes',
        ],
        'create' => [
            'label' => 'New event',
            'success' => 'Event created successfully',
            'error' => 'Error creating event',
        ],
    ],
    'validation' => [
        'required' => 'This field is required',
        'date' => 'Enter a valid date',
        'after' => 'End date must be after start date',
>>>>>>> beb3f44 (.)
    ],
];

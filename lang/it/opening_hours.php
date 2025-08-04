<?php

declare(strict_types=1);

return [
    'instructions' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
=======
        'title' => 'Orari di Apertura',
        'description' => 'Configura gli orari di apertura per ogni giorno della settimana. Lascia vuoto per indicare giorno di chiusura.',
>>>>>>> aurmich/dev
=======
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    ],
    
    'headers' => [
        'day' => 'Giorno',
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
    ],
    
    'legend' => [
        'open' => 'Aperto',
        'closed' => 'Chiuso',
<<<<<<< HEAD
<<<<<<< HEAD
        'format' => 'Formato: HH:MM',
=======
        'format' => 'Formato: HH:MM-HH:MM',
>>>>>>> aurmich/dev
=======
        'format' => 'Formato: HH:MM',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    ],
    
    'days' => [
        'monday' => 'Lunedì',
<<<<<<< HEAD
<<<<<<< HEAD
        'tuesday' => 'Martedì',
=======
        'tuesday' => 'Martedì', 
>>>>>>> aurmich/dev
=======
        'tuesday' => 'Martedì',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
        'sunday' => 'Domenica',
    ],
    
    'periods' => [
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'evening' => 'Sera',
    ],
    
    'labels' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'from' => 'Dalle',
        'to' => 'Alle',
        'closed' => 'Chiuso',
    ],
    
    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],
    
    'placeholders' => [
        'morning_hours' => 'Orario mattutino',
        'afternoon_hours' => 'Orario pomeridiano',
    ],
    
    'notes' => [
        'format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio)',
        'empty_hint' => 'Lasciare vuoto significa "chiuso"',
=======
=======
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        'from' => 'Dalle',
        'to' => 'Alle',
        'closed' => 'Chiuso',
    ],
    
    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],
    
    'placeholders' => [
        'morning_hours' => 'Orario mattutino',
        'afternoon_hours' => 'Orario pomeridiano',
    ],
    
    'notes' => [
<<<<<<< HEAD
        'format_hint' => 'Utilizzare il formato HH:MM-HH:MM (es. 08:30-12:00)',
        'empty_hint' => 'Lasciare vuoto per indicare che il periodo è chiuso',
        'validation_error' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
        'overlap_error' => 'Gli orari non possono sovrapporsi nello stesso giorno',
>>>>>>> aurmich/dev
=======
        'format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio)',
        'empty_hint' => 'Lasciare vuoto significa "chiuso"',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    ],
    
    'validation' => [
        'invalid_format' => 'Formato orario non valido. Utilizzare HH:MM-HH:MM',
        'invalid_time_range' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
<<<<<<< HEAD
<<<<<<< HEAD
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
=======
        'overlapping_hours' => 'Gli orari di mattina e pomeriggio si sovrappongono',
>>>>>>> aurmich/dev
=======
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        'from_before_to' => 'L\'orario "Dalle" deve essere precedente all\'orario "Alle"',
        'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
        'time_sequence' => 'L\'orario di inizio deve essere precedente a quello di fine',
    ],
]; 
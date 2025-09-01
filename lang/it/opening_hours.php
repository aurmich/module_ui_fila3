<?php

declare(strict_types=1);

return [
    'instructions' => [
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'headers' => [
        'day' => 'Giorno',
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'legend' => [
        'open' => 'Aperto',
        'closed' => 'Chiuso',
        'format' => 'Formato: HH:MM',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'days' => [
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
        'sunday' => 'Domenica',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'periods' => [
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'evening' => 'Sera',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'labels' => [
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'from' => 'Dalle',
        'to' => 'Alle',
        'closed' => 'Chiuso',
    ],
<<<<<<< HEAD

    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],

=======
    
    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],
    
>>>>>>> 60908d2 (.)
    'placeholders' => [
        'morning_hours' => 'Orario mattutino',
        'afternoon_hours' => 'Orario pomeridiano',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'notes' => [
        'format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio)',
        'empty_hint' => 'Lasciare vuoto significa "chiuso"',
    ],
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    'validation' => [
        'invalid_format' => 'Formato orario non valido. Utilizzare HH:MM-HH:MM',
        'invalid_time_range' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
        'from_before_to' => 'L\'orario "Dalle" deve essere precedente all\'orario "Alle"',
        'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
        'time_sequence' => 'L\'orario di inizio deve essere precedente a quello di fine',
    ],
<<<<<<< HEAD
];
=======
]; 
>>>>>>> 60908d2 (.)

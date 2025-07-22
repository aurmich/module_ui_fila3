<?php

<<<<<<< HEAD
<<<<<<< HEAD
return [
    'instructions' => [
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
    ],
    'headers' => [
        'day' => 'Giorno',
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
    ],
    'legend' => [
        'open' => 'Aperto',
        'closed' => 'Chiuso',
        'format' => 'Formato: HH:MM',
    ],
    'days' => [
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
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
        'empty_hint' => 'Lasciare vuoto significa \"chiuso\"',
    ],
    'validation' => [
        'invalid_format' => 'Formato orario non valido. Utilizzare HH:MM-HH:MM',
        'invalid_time_range' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
        'from_before_to' => 'L\'orario \"Dalle\" deve essere precedente all\'orario \"Alle\"',
        'to_after_from' => 'L\'orario \"Alle\" deve essere successivo all\'orario \"Dalle\"',
        'time_sequence' => 'L\'orario di inizio deve essere precedente a quello di fine',
=======
=======
>>>>>>> 4ed4b1e (.)
declare(strict_types=1);

return [
    'instructions' => [
        'title' => 'Opening Hours Configuration',
        'description' => 'Set opening hours for each day of the week. Leave empty for closed days.',
    ],
    'headers' => [
        'day' => 'Day',
        'morning' => 'Morning',
        'afternoon' => 'Afternoon',
    ],
    'legend' => [
        'open' => 'Open',
        'closed' => 'Closed',
        'format' => 'Format: HH:MM',
    ],
    'days' => [
        'monday' => 'Monday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday' => 'Thursday',
        'friday' => 'Friday',
        'saturday' => 'Saturday',
        'sunday' => 'Sunday',
    ],
    'periods' => [
        'morning' => 'Morning',
        'afternoon' => 'Afternoon',
        'evening' => 'Evening',
    ],
    'labels' => [
        'morning' => 'Morning',
        'afternoon' => 'Afternoon',
        'from' => 'From',
        'to' => 'To',
        'closed' => 'Closed',
    ],
    'descriptions' => [
        'day_schedule' => 'Configure opening hours for this day',
    ],
    'placeholders' => [
        'morning_hours' => 'Morning hours',
        'afternoon_hours' => 'Afternoon hours',
    ],
    'notes' => [
        'format_hint' => 'Use 24-hour format (e.g. 14:30 for 2:30 PM)',
        'empty_hint' => 'Leave empty means "closed"',
    ],
    'validation' => [
        'invalid_format' => 'Invalid time format. Use HH:MM-HH:MM',
        'invalid_time_range' => 'Opening time must be before closing time',
        'overlapping_hours' => 'Hours cannot overlap on the same day',
        'from_before_to' => 'The "From" time must be before the "To" time',
        'to_after_from' => 'The "To" time must be after the "From" time',
        'time_sequence' => 'Start time must be before end time',
<<<<<<< HEAD
>>>>>>> beb3f44 (.)
=======
>>>>>>> 4ed4b1e (.)
    ],
];

<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'instructions' => [
        'title' => 'Öffnungszeiten Konfiguration',
        'description' => 'Stellen Sie die Öffnungszeiten für jeden Wochentag ein. Leer lassen für geschlossene Tage.',
    ],
    
    'headers' => [
        'day' => 'Tag',
        'morning' => 'Vormittag',
        'afternoon' => 'Nachmittag',
    ],
    
    'legend' => [
        'open' => 'Geöffnet',
        'closed' => 'Geschlossen',
        'format' => 'Format: HH:MM',
    ],
    
    'days' => [
        'monday' => 'Montag',
        'tuesday' => 'Dienstag',
        'wednesday' => 'Mittwoch',
        'thursday' => 'Donnerstag',
        'friday' => 'Freitag',
        'saturday' => 'Samstag',
        'sunday' => 'Sonntag',
    ],
    
    'periods' => [
        'morning' => 'Vormittag',
        'afternoon' => 'Nachmittag',
        'evening' => 'Abend',
    ],
    
    'labels' => [
        'morning' => 'Vormittag',
        'afternoon' => 'Nachmittag',
        'from' => 'Von',
        'to' => 'Bis',
        'closed' => 'Geschlossen',
    ],
    
    'descriptions' => [
        'day_schedule' => 'Konfigurieren Sie die Öffnungszeiten für diesen Tag',
    ],
    
    'placeholders' => [
        'morning_hours' => 'Vormittagszeiten',
        'afternoon_hours' => 'Nachmittagszeiten',
    ],
    
    'notes' => [
        'format_hint' => 'Verwenden Sie das 24-Stunden-Format (z.B. 14:30 für 14:30 Uhr)',
        'empty_hint' => 'Leer lassen bedeutet "geschlossen"',
    ],
    
    'validation' => [
        'invalid_format' => 'Ungültiges Zeitformat. Verwenden Sie HH:MM-HH:MM',
        'invalid_time_range' => 'Öffnungszeit muss vor Schließungszeit liegen',
        'overlapping_hours' => 'Zeiten können am selben Tag nicht überlappen',
        'from_before_to' => 'Die "Von"-Zeit muss vor der "Bis"-Zeit liegen',
        'to_after_from' => 'Die "Bis"-Zeit muss nach der "Von"-Zeit liegen',
        'time_sequence' => 'Startzeit muss vor Endzeit liegen',
        'morning_before_afternoon' => 'Für :day muss die Vormittags-Schließzeit vor der Nachmittags-Öffnungszeit liegen.',
        'missing_closing_time' => 'Wenn Sie :session Öffnungszeit für :day angeben, müssen Sie auch die Schließzeit angeben.',
        'missing_opening_time' => 'Wenn Sie :session Schließzeit für :day angeben, müssen Sie auch die Öffnungszeit angeben.',
        'opening_before_closing' => 'Die :session Öffnungszeit für :day muss vor der Schließzeit liegen.',
        'morning' => 'Vormittag',
        'afternoon' => 'Nachmittag',
        'opening_hours' => [
            'morning_before_afternoon' => 'Für :day muss die Vormittags-Schließzeit vor der Nachmittags-Öffnungszeit liegen.',
            'missing_closing_time' => 'Wenn Sie :session Öffnungszeit für :day angeben, müssen Sie auch die Schließzeit angeben.',
            'missing_opening_time' => 'Wenn Sie :session Schließzeit für :day angeben, müssen Sie auch die Öffnungszeit angeben.',
            'opening_before_closing' => 'Die :session Öffnungszeit für :day muss vor der Schließzeit liegen.',
            'morning' => 'Vormittag',
            'afternoon' => 'Nachmittag',
        ],
    ],
];
=======
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
    ],
];
>>>>>>> d635998 (.)

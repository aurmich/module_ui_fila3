<?php

declare(strict_types=1);

return [
    'fields' => [
<<<<<<< HEAD
        // Per ogni giorno della settimana, includo tutte le chiavi di entrambe le versioni
=======
>>>>>>> 988693e (.)
        'monday' => [
            'morning_from' => [
                'label' => 'Monday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Monday morning',
            ],
            'morning_to' => [
                'label' => 'Monday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Monday morning',
            ],
            'afternoon_from' => [
                'label' => 'Monday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Monday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Monday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Monday afternoon',
            ],
<<<<<<< HEAD
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'help' => 'Description of Monday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'help' => 'Description of Monday afternoon activities',
            ],
        ],
        // ... ripeti la stessa struttura per tuesday, wednesday, thursday, friday, saturday, sunday
        // (omesso qui per brevità, ma va fatto per ogni giorno, integrando tutte le chiavi di entrambe le versioni)
        // ...
=======
        ],
        'tuesday' => [
            'morning_from' => [
                'label' => 'Tuesday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Tuesday morning',
            ],
            'morning_to' => [
                'label' => 'Tuesday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Tuesday morning',
            ],
            'afternoon_from' => [
                'label' => 'Tuesday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Tuesday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Tuesday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Tuesday afternoon',
            ],
        ],
        'wednesday' => [
            'morning_from' => [
                'label' => 'Wednesday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Wednesday morning',
            ],
            'morning_to' => [
                'label' => 'Wednesday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Wednesday morning',
            ],
            'afternoon_from' => [
                'label' => 'Wednesday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Wednesday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Wednesday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Wednesday afternoon',
            ],
        ],
        'thursday' => [
            'morning_from' => [
                'label' => 'Thursday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Thursday morning',
            ],
            'morning_to' => [
                'label' => 'Thursday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Thursday morning',
            ],
            'afternoon_from' => [
                'label' => 'Thursday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Thursday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Thursday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Thursday afternoon',
            ],
        ],
        'friday' => [
            'morning_from' => [
                'label' => 'Friday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Friday morning',
            ],
            'morning_to' => [
                'label' => 'Friday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Friday morning',
            ],
            'afternoon_from' => [
                'label' => 'Friday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Friday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Friday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Friday afternoon',
            ],
        ],
        'saturday' => [
            'morning_from' => [
                'label' => 'Saturday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Saturday morning',
            ],
            'morning_to' => [
                'label' => 'Saturday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Saturday morning',
            ],
            'afternoon_from' => [
                'label' => 'Saturday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Saturday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Saturday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Saturday afternoon',
            ],
        ],
        'sunday' => [
            'morning_from' => [
                'label' => 'Sunday morning from',
                'placeholder' => '08:00',
                'help' => 'Opening time for Sunday morning',
            ],
            'morning_to' => [
                'label' => 'Sunday morning to',
                'placeholder' => '12:00',
                'help' => 'Closing time for Sunday morning',
            ],
            'afternoon_from' => [
                'label' => 'Sunday afternoon from',
                'placeholder' => '14:00',
                'help' => 'Opening time for Sunday afternoon',
            ],
            'afternoon_to' => [
                'label' => 'Sunday afternoon to',
                'placeholder' => '18:00',
                'help' => 'Closing time for Sunday afternoon',
            ],
        ],
>>>>>>> 988693e (.)
        'schedule' => [
            'label' => 'Schedule',
            'placeholder' => 'Configure opening hours',
            'help' => 'Manage complete availability schedule',
        ],
        'availability' => [
            'label' => 'Availability',
            'placeholder' => 'Set your availability',
            'help' => 'Configure when you are available for appointments',
        ],
    ],
    'sections' => [
        'week_schedule' => [
            'label' => 'Weekly Schedule',
            'description' => 'Configure opening hours for each day of the week',
        ],
        'availability_settings' => [
            'label' => 'Availability Settings',
            'description' => 'Manage your availability time slots',
        ],
    ],
    'actions' => [
        'copy_schedule' => [
            'label' => 'Copy schedule',
            'success' => 'Schedule copied successfully',
            'error' => 'Error copying schedule',
        ],
        'clear_schedule' => [
            'label' => 'Clear schedule',
            'success' => 'Schedule cleared successfully',
            'confirmation' => 'Are you sure you want to clear all schedules?',
        ],
    ],
    'messages' => [
        'no_availability' => 'No availability configured',
        'schedule_saved' => 'Schedule saved successfully',
        'invalid_time_range' => 'Invalid time: end time must be after start time',
    ],
<<<<<<< HEAD
    'validation' => [
        'invalid_format' => 'Invalid time format. Use HH:MM-HH:MM',
        'invalid_time_range' => 'Opening time must be before closing time',
        'overlapping_hours' => 'Hours cannot overlap on the same day',
        'from_before_to' => 'The "From" time must be before the "To" time',
        'to_after_from' => 'The "To" time must be after the "From" time',
        'time_sequence' => 'Start time must be before end time',
        // Aggiungi qui eventuali altre chiavi di validazione presenti nelle versioni in conflitto
    ],
=======
>>>>>>> 988693e (.)
];

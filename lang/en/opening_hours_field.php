<?php

declare(strict_types=1);

return [
    'fields' => [
        'monday' => [
<<<<<<< HEAD
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
=======
            'morning' => [
                'label' => 'Monday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Monday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Monday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Monday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'monday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'monday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'monday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'monday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Monday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Monday afternoon activities',
            ],
        ],
        'tuesday' => [
            'morning' => [
                'label' => 'Tuesday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Tuesday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Tuesday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Tuesday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'tuesday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'tuesday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'tuesday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'tuesday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Tuesday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Tuesday afternoon activities',
            ],
        ],
        'wednesday' => [
            'morning' => [
                'label' => 'Wednesday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Wednesday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Wednesday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Wednesday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'wednesday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'wednesday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'wednesday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'wednesday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Wednesday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Wednesday afternoon activities',
            ],
        ],
        'thursday' => [
            'morning' => [
                'label' => 'Thursday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Thursday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Thursday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Thursday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'thursday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'thursday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'thursday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'thursday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Thursday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Thursday afternoon activities',
            ],
        ],
        'friday' => [
            'morning' => [
                'label' => 'Friday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Friday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Friday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Friday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'friday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'friday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'friday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'friday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Friday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Friday afternoon activities',
            ],
        ],
        'saturday' => [
            'morning' => [
                'label' => 'Saturday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Saturday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Saturday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Saturday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
                'description' => 'saturday.morning_from',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
                'description' => 'saturday.morning_to',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
                'description' => 'saturday.afternoon_from',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
                'description' => 'saturday.afternoon_to',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Saturday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Saturday afternoon activities',
            ],
        ],
        'sunday' => [
            'morning' => [
                'label' => 'Sunday Morning',
                'placeholder' => 'Select morning hours',
                'helper_text' => 'Sunday morning opening hours',
            ],
            'afternoon' => [
                'label' => 'Sunday Afternoon',
                'placeholder' => 'Select afternoon hours',
                'helper_text' => 'Sunday afternoon opening hours',
            ],
            'morning_from' => [
                'label' => '',
                'placeholder' => '08:00',
                'helper_text' => '',
            ],
            'morning_to' => [
                'label' => '',
                'placeholder' => '12:00',
                'helper_text' => '',
            ],
            'afternoon_from' => [
                'label' => '',
                'placeholder' => '14:00',
                'helper_text' => '',
            ],
            'afternoon_to' => [
                'label' => '',
                'placeholder' => '18:00',
                'helper_text' => '',
            ],
            'morning_label' => [
                'label' => 'Morning Label',
                'placeholder' => 'e.g. Specialist visits',
                'helper_text' => 'Description of Sunday morning activities',
            ],
            'afternoon_label' => [
                'label' => 'Afternoon Label',
                'placeholder' => 'e.g. Consultations',
                'helper_text' => 'Description of Sunday afternoon activities',
>>>>>>> beb3f44 (.)
            ],
        ],
        'schedule' => [
            'label' => 'Schedule',
            'placeholder' => 'Configure opening hours',
<<<<<<< HEAD
            'help' => 'Manage complete availability schedule',
=======
            'helper_text' => 'Complete availability schedule management',
>>>>>>> beb3f44 (.)
        ],
        'availability' => [
            'label' => 'Availability',
            'placeholder' => 'Set your availability',
<<<<<<< HEAD
            'help' => 'Configure when you are available for appointments',
=======
            'helper_text' => 'Configure when you are available for appointments',
>>>>>>> beb3f44 (.)
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
];

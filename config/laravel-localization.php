<?php

<<<<<<< HEAD
declare(strict_types=1);


return [
    /*
     * |--------------------------------------------------------------------------
     * | Languages
     * |--------------------------------------------------------------------------
     * |
     * | This is the array for the languages.
     * |
     */
=======
return [
    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    |
    | This is the array for the languages.
    |
    */
>>>>>>> d3fc412d (.)
    'languages' => [
        'it' => [
            'name' => 'Italiano',
            'script' => 'Latn',
            'native' => 'Italiano',
            'regional' => 'it_IT',
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
            'regional' => 'en_GB',
        ],
    ],
<<<<<<< HEAD
    /*
     * |--------------------------------------------------------------------------
     * | Language Detection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language detection.
     * |
     */
=======

    /*
    |--------------------------------------------------------------------------
    | Language Detection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language detection.
    |
    */
>>>>>>> d3fc412d (.)
    'detect' => [
        'browser' => true,
        'session' => true,
        'cookie' => true,
    ],
<<<<<<< HEAD
    /*
     * |--------------------------------------------------------------------------
     * | Language Selection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language selection.
     * |
     */
=======

    /*
    |--------------------------------------------------------------------------
    | Language Selection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language selection.
    |
    */
>>>>>>> d3fc412d (.)
    'selection' => [
        'default' => 'it',
        'fallback' => 'en',
    ],
<<<<<<< HEAD
    /*
     * |--------------------------------------------------------------------------
     * | URL Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the URL.
     * |
     */
=======

    /*
    |--------------------------------------------------------------------------
    | URL Configuration
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the URL.
    |
    */
>>>>>>> d3fc412d (.)
    'url' => [
        'prefix' => true,
        'hide_default' => false,
    ],
<<<<<<< HEAD
    /*
     * |--------------------------------------------------------------------------
     * | Route Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the routes.
     * |
     */
=======

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the routes.
    |
    */
>>>>>>> d3fc412d (.)
    'route' => [
        'prefix' => '{locale}',
        'middleware' => [
            'web',
            'localize',
        ],
    ],
];

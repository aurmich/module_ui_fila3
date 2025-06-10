<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    |
    | This is the array for the languages.
    |
    */
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

    /*
    |--------------------------------------------------------------------------
    | Language Detection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language detection.
    |
    */
    'detectBrowserLanguage' => true,
    'detectBrowserLanguageFromAcceptLanguage' => true,
    'detectBrowserLanguageFromAcceptLanguageHeader' => true,
    'detectBrowserLanguageFromSession' => true,
    'detectBrowserLanguageFromCookie' => true,
    'detectBrowserLanguageFromQueryString' => true,
    'detectBrowserLanguageFromRoute' => true,

    /*
    |--------------------------------------------------------------------------
    | Language Selection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language selection.
    |
    */
    'hideDefaultLocaleInURL' => false,
    'useAcceptLanguageHeader' => true,
    'useSessionLocale' => true,
    'useCookieLocale' => true,
    'useQueryStringLocale' => true,
    'useRouteLocale' => true,

    /*
    |--------------------------------------------------------------------------
    | Language Redirect
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language redirect.
    |
    */
    'redirectToDefaultLocale' => true,
    'redirectToNonLocalizedRoutes' => true,
    'redirectToLocalizedRoutes' => true,

    /*
    |--------------------------------------------------------------------------
    | URL Configuration
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the URL.
    |
    */
    'url' => [
        'prefix' => true,
        'hide_default' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the routes.
    |
    */
    'route' => [
        'prefix' => '{locale}',
        'middleware' => [
            'web',
            'localize',
            'localizationRedirect',
            'localeSessionRedirect',
            'localeCookieRedirect',
            'localeViewPath',
        ],
    ],
];

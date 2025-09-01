<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    |
    | This is the array for the languages
    |
    */
    'languages' => [
        'it' => [
            'name' => 'Italiano',
            'script' => 'Latn',
            'native' => 'Italiano',
<<<<<<< HEAD
<<<<<<< HEAD
            'regional' => 'it_IT',
=======
            'regional' => 'it_IT'
>>>>>>> 60908d2 (.)
=======
            'regional' => 'it_IT'
>>>>>>> 90e8530 (.)
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
<<<<<<< HEAD
<<<<<<< HEAD
            'regional' => 'en_GB',
        ],
=======
            'regional' => 'en_GB'
        ]
>>>>>>> 60908d2 (.)
=======
            'regional' => 'en_GB'
        ]
>>>>>>> 90e8530 (.)
    ],

    /*
    |--------------------------------------------------------------------------
    | Language Detection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language detection
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
    | This is the configuration for the language selection
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
    | This is the configuration for the language redirect
    |
    */
    'redirectToDefaultLocale' => true,
    'redirectToDefaultLocaleIfNotSupported' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocales' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInAcceptLanguage' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInAcceptLanguageHeader' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInSession' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInCookie' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInQueryString' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInRoute' => true,

    /*
    |--------------------------------------------------------------------------
    | Language Routes
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language routes
    |
    */
    'useLocalizedRoutes' => true,
    'useLocalizedRoutesInMiddleware' => true,
    'useLocalizedRoutesInController' => true,
    'useLocalizedRoutesInView' => true,
    'useLocalizedRoutesInRedirect' => true,
    'useLocalizedRoutesInUrl' => true,
    'useLocalizedRoutesInRoute' => true,
    'useLocalizedRoutesInRouteModelBinding' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlug' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocale' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallback' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirect' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSession' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookie' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookieAndQueryString' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookieAndQueryStringAndRoute' => true,
];

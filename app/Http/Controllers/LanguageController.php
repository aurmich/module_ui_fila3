<?php

declare(strict_types=1);

namespace Modules\UI\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 60908d2 (.)
=======
use Illuminate\Http\Request;
>>>>>>> 90e8530 (.)
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    /**
     * Cambia la lingua dell'applicazione.
     */
    public function switch(string $locale): RedirectResponse
    {
        // Usa configurazione per ottenere le lingue supportate
        $supportedLocales = Config::array('app.supported_locales', ['en', 'it']);
<<<<<<< HEAD
<<<<<<< HEAD

        if (! in_array($locale, $supportedLocales)) {
=======
        
        if (!in_array($locale, $supportedLocales)) {
>>>>>>> 60908d2 (.)
=======
        
        if (!in_array($locale, $supportedLocales)) {
>>>>>>> 90e8530 (.)
            $locale = Config::string('app.locale', 'en');
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

        return redirect()->back();
    }
}

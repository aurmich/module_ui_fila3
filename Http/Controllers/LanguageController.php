<?php

namespace Modules\UI\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Cambia la lingua dell'applicazione
     *
     * @param string $locale
     * @return RedirectResponse
     */
    public function switch(string $locale): RedirectResponse
    {
        // Verifica se la lingua è supportata
        if (!in_array($locale, ['it', 'en'])) {
            $locale = 'it';
        }

        // Imposta la lingua nella sessione
        Session::put('locale', $locale);
        App::setLocale($locale);

        // Reindirizza alla pagina precedente o alla home
        return redirect()->back();
    }
}

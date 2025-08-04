<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
>>>>>>> aurmich/dev
=======
use Illuminate\Support\Facades\Config;
>>>>>>> 345f8677 (phpstan)
use Spatie\QueueableAction\QueueableAction;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

class ApplyCalendarToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $timezone = Config::string('fullcalendar.localization.timezone', 'Europe/Rome');
        $locale = Config::string('fullcalendar.localization.locale', 'it');
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
        ->timezone($timezone)
        ->locale($locale)
=======
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
        ->timezone(config('fullcalendar.localization.timezone', 'Europe/Rome'))
        ->locale(config('fullcalendar.localization.locale', 'it'))
>>>>>>> aurmich/dev
=======
        $timezone = Config::string('fullcalendar.localization.timezone', 'Europe/Rome');
        $locale = Config::string('fullcalendar.localization.locale', 'it');
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
        ->timezone($timezone)
        ->locale($locale)
>>>>>>> 345f8677 (phpstan)
        ->plugins([
            'dayGrid',
            'timeGrid',
            'list',
            'interaction',
            'multiMonth',
            //'scrollGrid',//premium
        ]);

        // Aggiungi licenza scheduler solo se presente e valida
        $licenseKey = config('fullcalendar.scheduler_license_key');
        if ($licenseKey && is_string($licenseKey) && !empty(trim($licenseKey))) {
            $calendarPlugin->schedulerLicenseKey($licenseKey);
        }

        $panel->plugin($calendarPlugin);

        return $panel;
    }
}

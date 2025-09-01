<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

=======
use Closure;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\DatePicker;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
>>>>>>> 60908d2 (.)
use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 60908d2 (.)
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
class InlineDatePicker extends DatePicker
{
<<<<<<< HEAD
    /**
     * Date abilitate per la selezione.
     *
=======
    
    /**
     * Date abilitate per la selezione.
     * 
>>>>>>> 60908d2 (.)
     * @var array<string>|Closure|null
     */
    protected array|Closure|null $enabledDates = null;

    /**
     * Mese attualmente visualizzato (formato Y-m).
<<<<<<< HEAD
=======
     * 
     * @var string
>>>>>>> 60908d2 (.)
     */
    public string $currentViewMonth;

    /**
     * Vista Blade per il rendering.
     */
    protected string $view = 'ui::filament.forms.components.inline-date-picker';

    /**
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Inizializzazione con localizzazione Carbon
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

        // Hydration/Dehydration del valore
        $this->afterStateHydrated(static function (self $component, $state): void {
<<<<<<< HEAD

=======
            
>>>>>>> 60908d2 (.)
            if ($state) {
                $date = Carbon::parse($state);
                $component->currentViewMonth = $date->format('Y-m');
            }
        });

        $this->dehydrateStateUsing(static function (self $component, $state) {
<<<<<<< HEAD

=======
            
>>>>>>> 60908d2 (.)
            return $state ? Carbon::parse($state)->format('Y-m-d') : null;
        });
    }

    /**
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
<<<<<<< HEAD
        if (! $currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> 60908d2 (.)
            return;
        }
        $this->currentViewMonth = $currentMonth->subMonthNoOverflow()->format('Y-m');
    }

    /**
     * Naviga al mese successivo.
     */
    public function nextMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
<<<<<<< HEAD
        if (! $currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> 60908d2 (.)
            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
<<<<<<< HEAD
     *
     * @param  array<string>|Closure  $dates
=======
     * 
     * @param array<string>|Closure $dates
     * @return static
>>>>>>> 60908d2 (.)
     */
    public function enabledDates(array|Closure $dates): static
    {
        $this->enabledDates = $dates;
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
        return $this;
    }

    /**
     * Imposta il mese corrente di visualizzazione.
<<<<<<< HEAD
     *
     * @param  string  $month  Formato Y-m (es. '2025-06')
=======
     * 
     * @param string $month Formato Y-m (es. '2025-06')
     * @return static
>>>>>>> 60908d2 (.)
     */
    public function currentViewMonth(string $month): static
    {
        // ✅ Validazione robusta - fallback se vuoto o invalido
<<<<<<< HEAD
        if (empty($month) || ! preg_match('/^\d{4}-\d{2}$/', $month)) {
=======
        if (empty($month) || !preg_match('/^\d{4}-\d{2}$/', $month)) {
>>>>>>> 60908d2 (.)
            $this->currentViewMonth = now()->format('Y-m');
        } else {
            // Verifica che sia una data valida
            try {
                Carbon::createFromFormat('Y-m', $month);
                $this->currentViewMonth = $month;
            } catch (\Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }
<<<<<<< HEAD

        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     *
=======
        
        return $this;
    }

    

    /**
     * Ottiene le date abilitate risolte.
     * 
>>>>>>> 60908d2 (.)
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
        /** @phpstan-ignore return.type, argument.templateType, argument.templateType */
        return collect($dates)->map(function ($date): string {
            return Carbon::parse($date)->format('Y-m-d');
        });
    }

    /**
     * Verifica se una data è abilitata.
<<<<<<< HEAD
=======
     * 
     * @param string $date
     * @return bool
>>>>>>> 60908d2 (.)
     */
    public function isDateEnabled(string $date): bool
    {
        return $this->getEnabledDates()->isEmpty() || $this->getEnabledDates()->contains($date);
    }

    /**
     * Genera i dati del calendario per il mese corrente.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
<<<<<<< HEAD
        if (empty($this->currentViewMonth) || ! preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }

=======
        if (empty($this->currentViewMonth) || !preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }
        
>>>>>>> 60908d2 (.)
        /** @phpstan-ignore method.nonObject */
        $targetMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth)->startOfMonth();
        /** @phpstan-ignore-next-line */
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
<<<<<<< HEAD

        $weeks = collect();
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = collect();

            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();

=======
        
        $weeks = collect();
        $currentDay = $firstDay->copy();
        
        while ($currentDay->lte($lastDay)) {
            $week = collect();
            
            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();
                
>>>>>>> 60908d2 (.)
                // Gestione sicura del controllo selezione
                $isSelected = false;
                try {
                    $state = $this->getState();
                    /** @phpstan-ignore argument.type */
                    $isSelected = $state && $currentDay->isSameDay(Carbon::parse($state));
                } catch (\Throwable $e) {
                    $isSelected = false;
                }
<<<<<<< HEAD

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

=======
                
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;
                
>>>>>>> 60908d2 (.)
                $week->push([
                    'dateString' => $currentDay->format('Y-m-d'),
                    'datetime' => $currentDay->format('Y-m-d'),
                    'day' => $currentDay->day,
                    'isCurrentMonth' => $isCurrentMonth,
                    'isToday' => $isToday,
                    'isSelected' => $isSelected,
                    'isEnabled' => $isEnabled,
                ]);
<<<<<<< HEAD

                $currentDay->addDay();
            }

            $weeks->push($week->toArray());
        }

=======
                
                $currentDay->addDay();
            }
            
            $weeks->push($week->toArray());
        }
        
>>>>>>> 60908d2 (.)
        return [
            'weeks' => $weeks->toArray(),
            'month' => $targetMonth,
            'monthName' => $targetMonth->translatedFormat('F'),
            'year' => $targetMonth->year,
            'weekdays' => $this->getLocalizedWeekdays(),
        ];
    }

    /**
     * Ottiene i giorni della settimana localizzati da Carbon.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        for ($i = 0; $i < 7; $i++) {
            /** @phpstan-ignore property.nonObject */
            $weekdays[] = $monday->copy()->addDays($i)->locale(App::getLocale())->shortLocaleDayOfWeek[0];
        }
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        return $weekdays;
    }

    /**
     * Ottiene i dati per la vista.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        $calendarData = $this->generateCalendarData();
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
        return array_merge(parent::getViewData(), [
            'calendarData' => $calendarData,
            'currentViewMonth' => $this->currentViewMonth,
            'currentValue' => $this->getState(),
            'enabledDates' => $this->getEnabledDates(),
            'statePath' => $this->getStatePath(),
            'monthName' => $calendarData['monthName'],
            'year' => $calendarData['year'],
            'weekdays' => $calendarData['weekdays'],
        ]);
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 60908d2 (.)

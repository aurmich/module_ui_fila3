<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Carbon\Carbon;
use Filament\Forms\Components\Field;
<<<<<<< HEAD
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
=======
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Placeholder;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;

>>>>>>> 819632e (.)

/**
 * --
 */
class OpeningHoursField extends Field
{
    /**
     * Vista Blade per il rendering del componente.
     */
    protected string $view = 'ui::filament.forms.components.opening-hours-field';

    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD

        $days = collect([
            Carbon::MONDAY,
            Carbon::TUESDAY,
            Carbon::WEDNESDAY,
            Carbon::THURSDAY,
            Carbon::FRIDAY,
            Carbon::SATURDAY,
        ])->mapWithKeys(function ($day) {
            /** @phpstan-ignore method.nonObject */
            $dayKey = strtolower(Carbon::create()->startOfWeek()->addDays($day - 1)->format('l'));
            /** @phpstan-ignore method.nonObject */
            $dayLabel = ucfirst(Carbon::create()->startOfWeek()->addDays($day - 1)->isoFormat('dddd'));

            return [$dayKey => $dayLabel];
        });

        $schema = [];
        $native = false;

        foreach ($days as $dayKey => $dayLabel) {
            $schema[] = Placeholder::make($dayKey.'_label')
                ->label('')
                ->content($dayLabel)
                ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                ->columnSpan(1);

            $schema[] = TimePicker::make("$dayKey.morning_from")
                ->native($native)
                ->placeholder('08:00')
                            // ->placeholder('09:30')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live();

            $schema[] = TimePicker::make("$dayKey.morning_to")
                ->native($native)
                ->placeholder('13:30')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live();

            $schema[] = TimePicker::make("$dayKey.afternoon_from")
                ->native($native)
                ->placeholder('15:00')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live();

            $schema[] = TimePicker::make("$dayKey.afternoon_to")
                ->native($native)
                ->placeholder('19:00')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live();
=======
        $days = app(GetDaysMappingAction::class)->execute();

        $schema = [];
        $native=false;
        $live=false;

        foreach ($days as $dayKey => $dayLabel) {
            $schema[] = Placeholder::make($dayKey.'_label')
                    ->label('')
                    ->content($dayLabel)
                    ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                    ->columnSpan(1);

            $schema[] = TimePicker::make("$dayKey.morning_from")
                            ->native($native)
                            //->placeholder('08:00')
                            //->placeholder('09:30')
                            ->placeholder('--:--')
                            ->format('H:i')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live($live)
                            ;

            $schema[] = TimePicker::make("$dayKey.morning_to")
                            ->native($native)
                            //->placeholder('13:30')
                            ->placeholder('--:--')
                            ->format('H:i')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live($live)
                            ;

            $schema[] = TimePicker::make("$dayKey.afternoon_from")
                            ->native($native)
                            //->placeholder('15:00')
                            ->placeholder('--:--')
                            ->format('H:i')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live($live)
                            ;

            $schema[] = TimePicker::make("$dayKey.afternoon_to")
                            ->native($native)
                            //->placeholder('19:00')
                            ->placeholder('--:--')
                            ->format('H:i')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live($live)
                            ;
>>>>>>> 819632e (.)
        }

        $this->schema($schema)->columns(5);

        $this->afterStateUpdated(function ($state) {
<<<<<<< HEAD
            // dddx($state);
        });
        $this->afterStateHydrated(function (OpeningHoursField $component, $state) {
            // Qui puoi normalizzare lo stato iniziale se serve
            // dddx($state);
=======
            //dddx($state);
        });
        $this->afterStateHydrated(function (OpeningHoursField $component, $state) {
            // Qui puoi normalizzare lo stato iniziale se serve
            //dddx($state);
>>>>>>> 819632e (.)
        });
        $this->rules([
            /*
            function(){
                $data = $this->getState();
                $this->addError(null, 'test');
                return false;
            }*/
<<<<<<< HEAD
            new \Modules\UI\Rules\OpeningHoursRule,
=======
            new \Modules\UI\Rules\OpeningHoursRule(),
>>>>>>> 819632e (.)

        ]);
    }
}

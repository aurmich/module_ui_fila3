<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Webmozart\Assert\Assert;
use Carbon\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\Grid;
>>>>>>> aurmich/dev
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Field;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Section;
use function Safe\json_encode;
=======
=======
use Filament\Forms\Components\Section;
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)

>>>>>>> aurmich/dev
// use Squire\Models\Country;

class OpeningHoursField extends Field
{
    /**
     * Vista Blade per il rendering del componente.
     */
    protected string $view = 'ui::filament.forms.components.opening-hours-field';

    protected function setUp(): void
    {
        parent::setUp();

        $days = collect([
            Carbon::MONDAY,
            Carbon::TUESDAY,
            Carbon::WEDNESDAY,
            Carbon::THURSDAY,
            Carbon::FRIDAY,
            Carbon::SATURDAY,
        ])->mapWithKeys(function ($day) {
<<<<<<< HEAD
<<<<<<< HEAD
            /** @phpstan-ignore method.nonObject */
            $dayKey = strtolower(Carbon::create()->startOfWeek()->addDays($day - 1)->format('l'));
            /** @phpstan-ignore method.nonObject */
=======
            $dayKey = strtolower(Carbon::create()->startOfWeek()->addDays($day - 1)->format('l'));
>>>>>>> aurmich/dev
=======
            /** @phpstan-ignore-next-line */
            $dayKey = strtolower(Carbon::create()->startOfWeek()->addDays($day - 1)->format('l'));
            /** @phpstan-ignore-next-line */
>>>>>>> 345f8677 (phpstan)
            $dayLabel = ucfirst(Carbon::create()->startOfWeek()->addDays($day - 1)->isoFormat('dddd'));
            return [$dayKey => $dayLabel];
        });

<<<<<<< HEAD
<<<<<<< HEAD
        $schema = [];

       
        
        foreach ($days as $dayKey => $dayLabel) {
            $schema[]=
                    // Mattina
                    Placeholder::make($dayKey.'_label')
                    ->label('')
                    ->content($dayLabel)
                    ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                    ->columnSpan(1);

            $schema[]=TimePicker::make("$dayKey.morning_from")
                            ->placeholder('08:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                        
            $schema[]=TimePicker::make("$dayKey.morning_to")
                            ->placeholder('12:30')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                    
            $schema[]=TimePicker::make("$dayKey.afternoon_from")
                            ->placeholder('15:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                        
            $schema[]=TimePicker::make("$dayKey.afternoon_to")
                            ->placeholder('19:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                    
            
        }
         
        $this->schema($schema)->columns(5);
    }
=======
        $this->schema([
            // Intestazioni delle colonne con stile coerente
            Grid::make(3)->schema([
                Placeholder::make('header_day')
                    ->label('')
                    ->content(__('ui::opening_hours.headers.day'))
                    ->extraAttributes(['class' => 'font-semibold text-gray-700 dark:text-gray-300 text-center py-3']),
                
                Placeholder::make('header_morning')
                    ->label('')
                    ->content(__('ui::opening_hours.headers.morning'))
                    ->extraAttributes(['class' => 'font-semibold text-gray-700 dark:text-gray-300 text-center py-3']),
                
                Placeholder::make('header_afternoon')
                    ->label('')
                    ->content(__('ui::opening_hours.headers.afternoon'))
                    ->extraAttributes(['class' => 'font-semibold text-gray-700 dark:text-gray-300 text-center py-3']),
            ])
            ->columnSpanFull()
            ->extraAttributes(['class' => 'bg-gray-100 dark:bg-gray-700 rounded-lg px-2 py-1 mb-2 border-b-2 border-gray-200 dark:border-gray-600']),
=======
        $schema = [];
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)

       
        
        foreach ($days as $dayKey => $dayLabel) {
            $schema[]=
                    // Mattina
                    Placeholder::make($dayKey.'_label')
                    ->label('')
                    ->content($dayLabel)
                    ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                    ->columnSpan(1);

            $schema[]=TimePicker::make("$dayKey.morning_from")
                            ->placeholder('08:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                        
            $schema[]=TimePicker::make("$dayKey.morning_to")
                            ->placeholder('12:30')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                    
            $schema[]=TimePicker::make("$dayKey.afternoon_from")
                            ->placeholder('15:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                        
            $schema[]=TimePicker::make("$dayKey.afternoon_to")
                            ->placeholder('19:00')
                            ->seconds(false)
                            ->minutesStep(15)
                            ->nullable()
                            ->live();
                    
            
        }
         
        $this->schema($schema)->columns(5);
    }
<<<<<<< HEAD

   
>>>>>>> aurmich/dev
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
}

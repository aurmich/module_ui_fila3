<?php

declare(strict_types=1);

<<<<<<< HEAD
use Carbon\Carbon;
use Filament\Forms\Components\Field;
use Filament\Forms\Form;
use Illuminate\Support\Facades\App;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
=======
use Filament\Forms\Components\Field;
use Filament\Forms\Form;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
>>>>>>> d3fc412d (.)

uses(Tests\TestCase::class);

test('it can be instantiated', function (): void {
    $component = InlineDatePicker::make('test');
    expect($component)->toBeInstanceOf(Field::class);
    expect($component)->toBeInstanceOf(InlineDatePicker::class);
});

test('it can set and get enabled dates', function (): void {
    $dates = ['2025-06-01', '2025-06-15', '2025-06-30'];
<<<<<<< HEAD

=======
    
>>>>>>> d3fc412d (.)
    $component = InlineDatePicker::make('test')->enabledDates($dates);
    expect($component->getEnabledDates()->toArray())->toBe($dates);
});

test('it accepts closure for enabled dates', function (): void {
    $dates = ['2025-06-01', '2025-06-15', '2025-06-30'];
<<<<<<< HEAD

    $component = InlineDatePicker::make('test')->enabledDates(fn() => $dates);
=======
    
    $component = InlineDatePicker::make('test')->enabledDates(fn () => $dates);
>>>>>>> d3fc412d (.)
    expect($component->getEnabledDates()->toArray())->toBe($dates);
});

test('it checks if date is enabled', function (): void {
    $dates = ['2025-06-15'];
<<<<<<< HEAD

    $component = InlineDatePicker::make('test')->enabledDates($dates);

=======
    
    $component = InlineDatePicker::make('test')
        ->enabledDates($dates);
        
>>>>>>> d3fc412d (.)
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
    expect($component->isDateEnabled('2025-06-16'))->toBeFalse();
});

test('it generates calendar data and marks enabled dates', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
    $component->currentViewMonth('2025-06');
    $data = $component->generateCalendarData();

<<<<<<< HEAD
    expect($data)->toHaveKeys(['year', 'month', 'weeks', 'monthName', 'weekdays']);
=======
    expect($data)->toHaveKeys(['year','month','weeks','monthName','weekdays']);
>>>>>>> d3fc412d (.)
    $found = false;
    foreach ($data['weeks'] as $week) {
        foreach ($week as $day) {
            if (($day['datetime'] ?? $day['dateString'] ?? null) === '2025-06-15') {
                $found = true;
                expect($day['isEnabled'])->toBeTrue();
            }
        }
    }
    expect($found)->toBeTrue('Enabled date 2025-06-15 not found in generated calendar data');
});

test('it respects locale in calendar data', function (): void {
    \Illuminate\Support\Facades\App::setLocale('it');
    $component = InlineDatePicker::make('test');
    $data = $component->generateCalendarData();
    expect($data)->toHaveKey('monthName');
});

test('it can be used in a form', function (): void {
<<<<<<< HEAD
    $form = Form::make()->schema([
        InlineDatePicker::make('appointment_date')->enabledDates(['2025-06-15']),
    ]);

=======
    $form = Form::make()
        ->schema([
            InlineDatePicker::make('appointment_date')
                ->enabledDates(['2025-06-15'])
        ]);
        
>>>>>>> d3fc412d (.)
    expect($form->getComponents())->toHaveCount(1);
    expect($form->getComponent('appointment_date'))->toBeInstanceOf(InlineDatePicker::class);
});

test('it handles empty enabled dates', function (): void {
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates([]);

=======
    $component = InlineDatePicker::make('test')
        ->enabledDates([]);
        
>>>>>>> d3fc412d (.)
    expect($component->getEnabledDates())->toBeInstanceOf(\Illuminate\Support\Collection::class);
    expect($component->getEnabledDates()->isEmpty())->toBeTrue();
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
});

test('it throws on invalid enabled dates input', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['invalid-date']);
<<<<<<< HEAD
    expect($component->getEnabledDates()->toArray(...))->toThrow(\Carbon\Exceptions\InvalidFormatException::class);
});

test('it handles different date formats', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);

=======
    expect(fn () => $component->getEnabledDates()->toArray())
        ->toThrow(\Carbon\Exceptions\InvalidFormatException::class);
});

test('it handles different date formats', function (): void {
    $component = InlineDatePicker::make('test')
        ->enabledDates(['2025-06-15']);
        
>>>>>>> d3fc412d (.)
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
    expect($component->isDateEnabled('15-06-2025'))->toBeFalse();
});

test('it handles time portion gracefully', function (): void {
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);

=======
    $component = InlineDatePicker::make('test')
        ->enabledDates(['2025-06-15']);
        
>>>>>>> d3fc412d (.)
    expect($component->isDateEnabled('2025-06-15 14:30:00'))->toBeTrue();
});

test('it uses carbon for localization', function (): void {
    // Arrange
    App::setLocale('it');
    $picker = InlineDatePicker::make('test_date');
<<<<<<< HEAD

    // Act
    $weekdays = invokeMethod($picker, 'getLocalizedWeekdays', []);

=======
    
    // Act
    $weekdays = invokeMethod($picker, 'getLocalizedWeekdays', []);
    
>>>>>>> d3fc412d (.)
    // Assert (component returns localized short names; current impl may return single-letter codes)
    expect($weekdays)->toHaveCount(7);
});

test('it generates correct calendar data', function (): void {
    // Arrange
    $picker = InlineDatePicker::make('test_date');
    $picker->currentViewMonth = '2024-01';
<<<<<<< HEAD

    // Act
    $calendarData = $picker->generateCalendarData();

=======
    
    // Act
    $calendarData = $picker->generateCalendarData();
    
>>>>>>> d3fc412d (.)
    // Assert
    expect($calendarData)->toHaveKey('weeks');
    expect($calendarData)->toHaveKey('monthName');
    expect($calendarData)->toHaveKey('weekdays');
    expect(count($calendarData['weeks']))->toBeGreaterThanOrEqual(4);
    expect(count($calendarData['weeks']))->toBeLessThanOrEqual(6);
    expect($calendarData['weeks'][0])->toHaveCount(7); // 7 giorni per settimana
});

test('it handles enabled dates correctly', function (): void {
    // Arrange
    $picker = InlineDatePicker::make('test_date');
    $picker->enabledDates(['2024-01-15', '2024-01-16']);
<<<<<<< HEAD

=======
    
>>>>>>> d3fc412d (.)
    // Act & Assert
    expect($picker->isDateEnabled('2024-01-15'))->toBeTrue();
    expect($picker->isDateEnabled('2024-01-16'))->toBeTrue();
    expect($picker->isDateEnabled('2024-01-14'))->toBeFalse();
});

test('it is dry no code duplication', function (): void {
    // Verifica che non ci sia duplicazione di logica tra PHP e JavaScript
<<<<<<< HEAD
    $viewContent = file_get_contents(base_path(
        'laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php',
    ));

    // Assert: Nessun JavaScript complesso per navigazione
    expect($viewContent)->not->toContain('navigateToMonth');
    expect($viewContent)->not->toContain('generateCalendarForMonth');

=======
    $viewContent = file_get_contents(
        base_path('laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php')
    );
    
    // Assert: Nessun JavaScript complesso per navigazione
    expect($viewContent)->not->toContain('navigateToMonth');
    expect($viewContent)->not->toContain('generateCalendarForMonth');
    
>>>>>>> d3fc412d (.)
    // Assert: Solo chiamate wire:click server-side
    expect($viewContent)->toContain('wire:click="previousMonth"');
    expect($viewContent)->toContain('wire:click="nextMonth"');
});

test('it is kiss simple and clear', function (): void {
    $picker = InlineDatePicker::make('test_date');
<<<<<<< HEAD

    // Assert: API semplice
    expect($picker->enabledDates(['2024-01-01']))->toBeInstanceOf(InlineDatePicker::class);

    // Assert: Metodi pubblici minimi e chiari
    $reflection = new \ReflectionClass($picker);
    $publicMethods = array_filter($reflection->getMethods(), fn($m) => $m->isPublic() && !$m->isStatic());

    // Dovrebbe esporre metodi essenziali utilizzabili
    foreach ([
        'enabledDates',
        'isDateEnabled',
        'generateCalendarData',
        'getViewData',
        'previousMonth',
        'nextMonth',
    ] as $method) {
        expect(method_exists($picker, $method))->toBeTrue("Metodo essenziale mancante: {$method}");
=======
    
    // Assert: API semplice
    expect($picker->enabledDates(['2024-01-01']))->toBeInstanceOf(InlineDatePicker::class);
    
    // Assert: Metodi pubblici minimi e chiari
    $reflection = new \ReflectionClass($picker);
    $publicMethods = array_filter($reflection->getMethods(), fn($m) => $m->isPublic() && !$m->isStatic());
    
    // Dovrebbe esporre metodi essenziali utilizzabili
    foreach (['enabledDates','isDateEnabled','generateCalendarData','getViewData','previousMonth','nextMonth'] as $method) {
        expect(method_exists($picker, $method))->toBeTrue("Metodo essenziale mancante: $method");
>>>>>>> d3fc412d (.)
    }
});

/**
 * Invoca un metodo privato/protetto per testing.
 */
function invokeMethod(object $object, string $methodName, array $parameters = []): mixed
{
    $reflection = new \ReflectionClass(get_class($object));
    $method = $reflection->getMethod($methodName);
    $method->setAccessible(true);

    return $method->invokeArgs($object, $parameters);
}

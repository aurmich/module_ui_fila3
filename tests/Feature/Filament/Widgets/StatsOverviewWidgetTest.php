<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\UI\Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
=======
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\UI\Filament\Widgets\StatsOverviewWidget;
>>>>>>> d635998 (.)

uses(Tests\TestCase::class);

beforeEach(function (): void {
<<<<<<< HEAD
    $this->widget = new StatsOverviewWidget();
=======
    $this->widget = new StatsOverviewWidget;
>>>>>>> d635998 (.)
});

test('stats overview widget extends correct base class', function (): void {
    expect($this->widget)->toBeInstanceOf(\Filament\Widgets\StatsOverviewWidget::class);
});

test('stats overview widget has correct namespace', function (): void {
    expect(StatsOverviewWidget::class)->toContain('Modules\UI\Filament\Widgets');
});

test('stats overview widget has getStats method', function (): void {
    expect($this->widget)->toHaveMethod('getStats');
});

test('stats overview widget returns correct stats', function (): void {
    $stats = $this->widget->getStats();
<<<<<<< HEAD
    
    expect($stats)->toBeArray();
    expect($stats)->toHaveCount(3);
    
=======

    expect($stats)->toBeArray();
    expect($stats)->toHaveCount(3);

>>>>>>> d635998 (.)
    // Check first stat
    expect($stats[0])->toBeInstanceOf(Stat::class);
    expect($stats[0]->getLabel())->toBe('Unique views');
    expect($stats[0]->getValue())->toBe('192.1k');
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    // Check second stat
    expect($stats[1])->toBeInstanceOf(Stat::class);
    expect($stats[1]->getLabel())->toBe('Bounce rate');
    expect($stats[1]->getValue())->toBe('21%');
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    // Check third stat
    expect($stats[2])->toBeInstanceOf(Stat::class);
    expect($stats[2]->getLabel())->toBe('Average time on page');
    expect($stats[2]->getValue())->toBe('3:12');
});

test('stats overview widget stats are instances of Stat class', function (): void {
    $stats = $this->widget->getStats();
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    foreach ($stats as $stat) {
        expect($stat)->toBeInstanceOf(Stat::class);
    }
});

test('stats overview widget can be instantiated', function (): void {
    expect($this->widget)->toBeInstanceOf(StatsOverviewWidget::class);
});

test('stats overview widget has correct strict types declaration', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    $filename = $reflection->getFileName();
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('declare(strict_types=1);');
    }
});

test('stats overview widget getStats method is protected', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    $getStatsMethod = $reflection->getMethod('getStats');
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    expect($getStatsMethod->isProtected())->toBeTrue();
});

test('stats overview widget getStats method has correct return type', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    $getStatsMethod = $reflection->getMethod('getStats');
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    expect($getStatsMethod->getReturnType()->getName())->toBe('array');
});

test('stats overview widget has correct use statements', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    $filename = $reflection->getFileName();
<<<<<<< HEAD
    
=======

>>>>>>> d635998 (.)
    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('use Filament\Widgets\StatsOverviewWidget as BaseWidget;');
        expect($content)->toContain('use Filament\Widgets\StatsOverviewWidget\Stat;');
    }
});

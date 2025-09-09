<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Modules\UI\Filament\Widgets\RowWidget;
use Tests\TestCase;
use Filament\Widgets\Widget;
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets\RowWidgetTest;

=======
>>>>>>> ab33b51 (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
<<<<<<< HEAD
>>>>>>> d3fc412 (.)
=======
use Tests\TestCase;
>>>>>>> ab33b51 (.)

uses(TestCase::class);

beforeEach(function () {
    $this->widget = new RowWidget;
});

test('row widget extends filament widget', function () {
    expect($this->widget)->toBeInstanceOf(Widget::class);
});

test('row widget can be instantiated', function () {
    expect($this->widget)->toBeInstanceOf(RowWidget::class);
});

test('row widget has correct view', function () {
    expect($this->widget->getViewName())->toBe('ui::filament.widgets.row-widget');
});

test('row widget has proper properties', function () {
    expect($this->widget)->toHaveProperty('heading');
    expect($this->widget)->toHaveProperty('description');
});

test('row widget can render', function () {
    $view = $this->widget->render();
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
>>>>>>> d3fc412 (.)
=======

>>>>>>> ab33b51 (.)
    expect($view)->toBeInstanceOf(\Illuminate\Contracts\View\View::class);
});

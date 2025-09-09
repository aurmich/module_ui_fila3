<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\UI\Tests\Unit\Filament\Widgets\RowWidgetTest;

=======
>>>>>>> 819632e (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
<<<<<<< HEAD
=======
use Tests\TestCase;
>>>>>>> 819632e (.)

uses(TestCase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->widget = new RowWidget();
=======
    $this->widget = new RowWidget;
>>>>>>> 819632e (.)
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
=======

>>>>>>> 819632e (.)
    expect($view)->toBeInstanceOf(\Illuminate\Contracts\View\View::class);
});

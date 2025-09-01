<?php

declare(strict_types=1);

use Illuminate\View\Component;

test('ui components can be rendered', function () {
<<<<<<< HEAD
    $component = new class extends Component
    {
=======
    $component = new class extends Component {
>>>>>>> 60908d2 (.)
        public function render()
        {
            return view('ui::components.ui.button');
        }
    };
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    expect($component)->toBeInstanceOf(Component::class);
});

test('ui button component has correct attributes', function () {
    $view = view('ui::components.ui.button', [
        'type' => 'primary',
        'size' => 'md',
        'disabled' => false,
    ]);
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    expect($view->render())
        ->toContain('btn')
        ->toContain('btn-primary');
});

test('ui card component renders content', function () {
    $view = view('ui::components.ui.card', [
        'title' => 'Test Card',
        'content' => 'Test Content',
    ]);
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
    expect($view->render())
        ->toContain('Test Card')
        ->toContain('Test Content');
});

<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
<<<<<<< HEAD
=======
use Illuminate\View\View;
>>>>>>> 8a76661 (.)
use Modules\Xot\Actions\GetViewAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
class Navbar extends Component
{
    public function __construct(
        // public Post $article,
        // public bool $showAuthor = false,
        // public string $tpl = 'v1'
    ) {
    }

<<<<<<< HEAD
    public function render(): Renderable
=======
    public function render(): View
>>>>>>> 8a76661 (.)
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
    }
}

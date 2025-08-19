<?php

<<<<<<< HEAD
namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\View\Component;
=======
declare(strict_types=1);

namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\View\Component;
use Illuminate\View\View;
>>>>>>> 8a76661 (.)

class Simple extends Component
{
    public function __construct()
    {
        //
    }

<<<<<<< HEAD
    public function render()
=======
    public function render(): View
>>>>>>> 8a76661 (.)
    {
        return view('ui::components.blocks.hero.simple');
    }
} 
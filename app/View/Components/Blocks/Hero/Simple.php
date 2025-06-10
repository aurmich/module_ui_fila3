<?php

namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\View\Component;

class Simple extends Component
{
    public string $title;
    public string $subtitle;
    public string $image;
    public string $cta_text;
    public string $cta_link;
    public string $cta_secondary_text;
    public string $cta_secondary_link;

    public function __construct(
        string $title = '',
        string $subtitle = '',
        string $image = '',
        string $cta_text = '',
        string $cta_link = '#',
        string $cta_secondary_text = '',
        string $cta_secondary_link = '#'
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
        $this->cta_text = $cta_text;
        $this->cta_link = $cta_link;
        $this->cta_secondary_text = $cta_secondary_text;
        $this->cta_secondary_link = $cta_secondary_link;
    }

    public function render()
    {
        return view('ui::components.blocks.hero.simple');
    }
}

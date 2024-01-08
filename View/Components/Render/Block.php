<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Modules\Xot\Actions\Module\GetModuleNameFromModelAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
class Block extends Component
{
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = 'v1')
    {
    }

    public function render(): Renderable
    {
        $this->tpl = $this->block['type'];

        $views = ['ui::components.blocks.'.$this->tpl];
        if ($this->model !== null) {
            $module = app(GetModuleNameFromModelAction::class)->execute($this->model);
            $views[] = strtolower($module).'::components.blocks.'.$this->tpl;
        }

        $view = Arr::first($views, static fn (string $view) => view()->exists($view));
        if ($view === null) {
            dddx([$views, $this->model]);
        }
        $view_params = $this->block['data'] ?? [];

        return view($view, $view_params);
    }
}
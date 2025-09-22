<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
<<<<<<< HEAD
    public null|string $view = null;

    public function __construct(
        public array $block,
        public null|Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if (null === $view) {
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
    public ?string $view = null;

    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if (null == $view) {
            $view = 'ui::empty';
        }
        Assert::string($view);
>>>>>>> d3fc412d (.)
        $this->view = $view;
    }

    public function render(): ViewFactory|View
    {
<<<<<<< HEAD
        if (!isset($this->block['type'])) {
=======
        if (! isset($this->block['type'])) {
>>>>>>> d3fc412d (.)
            return view('ui::empty');
        }

        $view = $this->view;
<<<<<<< HEAD
        if (!view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists [' . $view . '] ! <pre>' . print_r($this->block, true) . '</pre>';
=======
        if (! view()->exists(is_string($view) ? $view : (string) $view)) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
>>>>>>> d3fc412d (.)
            $view_params = [
                'title' => 'deprecated',
                'message' => $message,
            ];

            return view('ui::alert', $view_params);
        }
        $view_params = $this->block['data'] ?? [];
<<<<<<< HEAD
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!view()->exists($view)) {
            throw new \Exception('view not found [' . $view . ']');
=======
        Assert::string($view);
        if (! view()->exists($view)) {
            throw new \Exception('view not found ['.$view.']');
>>>>>>> d3fc412d (.)
        }

        return view($view, $view_params);
    }
}

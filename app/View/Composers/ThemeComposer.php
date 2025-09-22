<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

class ThemeComposer
{
    public function metatags(): \Illuminate\View\View
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'ui::metatags';

        return view($view);
    }

    /**
     * @param string $index
     *
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    public function metatag($index)
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
        $ris = config('metatag.' . $index);
=======
        $ris = config('metatag.'.$index);
>>>>>>> d3fc412d (.)
        // self::__setStatic($index, $ris);
        // }

        return $ris;
    }

    public function showScripts(): string
    {
        return '';
    }

    public function flag(string $lang): \Illuminate\View\View
    {
        $view = "ui::svg.flags.{$lang}";
<<<<<<< HEAD
        if (!view()->exists($view)) {
            throw new \Exception('view not exits [' . $view . ']');
=======
        if (! view()->exists($view)) {
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> d3fc412d (.)
        }

        return view($view);
    }
}

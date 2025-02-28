<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\Widget as FilamentWidget;
use Illuminate\Support\Facades\Cache;
use Filament\Widgets\WidgetConfiguration;
=======
use Illuminate\Support\Facades\Cache;
use Filament\Widgets\WidgetConfiguration;
use Filament\Widgets\Widget as FilamentWidget;
>>>>>>> 8045aaff (up)
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Modules\Xot\Actions\View\GetViewByClassAction;
=======
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Cache;
>>>>>>> 5ecd18f4 (up)

/**
 * @property bool $shouldRender
 */
abstract class XotBaseWidget extends Widget
{
    /**
     * The cache key for the widget.
     */
    protected ?string $cacheKey = null;

<<<<<<< HEAD
<<<<<<< HEAD

    public function __construct()
    {
        //parent::__construct();//Cannot call constructor
        $view = app(GetViewByClassAction::class)->execute(static::class);
        static::$view = $view;
=======
    
    public function __construct()
    {
        //parent::__construct();//Cannot call constructor
        $view=app(GetViewByClassAction::class)->execute(static::class);
        static::$view=$view;
>>>>>>> 8045aaff (up)
=======
    /**
     * The cache TTL in seconds.
     */
    protected ?int $cacheTtl = null;

    /**
     * The polling interval in seconds.
     */
    protected ?int $pollingInterval = null;

    /**
     * @var ?\Closure
     */
    protected $authorizeUsing;

    /**
     * Set the authorization callback.
     */
    public function authorizeUsing(?\Closure $callback): static
    {
        $this->authorizeUsing = $callback;

        return $this;
    }

    /**
     * Enable caching for the widget.
     */
    public function cache(string $key, ?int $ttl = 300): static
    {
        $this->cacheKey = $key;
        $this->cacheTtl = $ttl;

        return $this;
    }

    /**
     * Enable polling for the widget.
     */
    public function poll(?int $interval = 10): static
    {
        $this->pollingInterval = $interval;

        return $this;
    }

    /**
     * Get the cached data.
     *
     * @template T
     *
     * @param \Closure(): T $callback
     *
     * @return T
     */
    protected function getCachedData(\Closure $callback): mixed
    {
        if (! $this->cacheKey) {
            return $callback();
        }

        return Cache::remember(
            $this->getCacheKey(),
            $this->cacheTtl,
            $callback
        );
    }

    /**
     * Get the full cache key.
     */
    protected function getCacheKey(): string
    {
        return 'widget.'.$this->cacheKey.'.'.class_basename($this);
    }

    /**
     * Check if the widget is authorized.
     */
    public function isAuthorized(): bool
    {
        if (! $this->authorizeUsing) {
            return true;
        }

        return (bool) call_user_func($this->authorizeUsing);
    }

    /**
     * Get the polling interval.
     */
    public function getPollingInterval(): ?int
    {
        return $this->pollingInterval;
    }

    /**
     * Check if the widget should poll.
     */
    public function shouldPoll(): bool
    {
        return null !== $this->pollingInterval;
    }

    /**
     * Mount the widget.
     */
    public function mount(): void
    {
        if (! $this->isAuthorized()) {
            $this->shouldRender = false;
        }
    }

    /**
     * Get the view data.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'pollingInterval' => $this->getPollingInterval(),
            'shouldPoll' => $this->shouldPoll(),
        ];
>>>>>>> 5ecd18f4 (up)
    }
}

<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum for managing table layout types in Filament UI components.
 *
 * This enum provides standardized layout options for tables and data grids,
 * allowing users to toggle between list and grid views with appropriate
 * styling and column configurations.
 *
 * @see \Modules\UI\docs\table-layout-enum-usage.md
 */
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case LIST = 'list';
    case GRID = 'grid';

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value.'.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(self::class, $this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value.'.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value.'.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value.'.helper_text');
    }

    public function toggle(): self
    {
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
    }

    public function isGridLayout(): bool
    {
        return self::GRID === $this;
    }

    public function isListLayout(): bool
    {
        return self::LIST === $this;
    }

    /**
     * Get the responsive grid configuration for table content.
     *
     * Returns the number of columns for different screen sizes when using
     * grid layout, or null for list layout.
     *
     * @return array<string, int>|null Grid configuration or null for list layout
     */
    public function getTableContentGrid(): ?array
    {
        return $this->isGridLayout()
            ? [
                'sm' => 1,
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
                '2xl' => 5,
            ]
            : null;
    }

   /**
     * Undocumented function.
     *
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(): array
    {
        $trace = debug_backtrace();
        /** @var ListRecords $caller */
        $caller = Arr::get($trace, '1.object');

        if (! method_exists($caller, 'getGridTableColumns')) {
            throw new \Exception('method getGridTableColumns not found in ['.get_class($caller).']');
        }
        if (! method_exists($caller, 'getTableColumns')) {
            throw new \Exception('method getTableColumns not found in ['.get_class($caller).']');
        }

        $columns = $this->isGridLayout()
            ? $caller->getGridTableColumns()
            /** @phpstan-ignore method.protected */
            : $caller->getTableColumns();

        Assert::isArray($columns);

        return $columns;
    }

    public static function getOptions(): array
    {
        return [
            self::LIST->value => self::LIST->getLabel(),
            self::GRID->value => self::GRID->getLabel(),
        ];
    }

    public function getContainerClasses(): string
    {
        return match ($this) {
            self::LIST => 'table-layout-list',
            self::GRID => 'table-layout-grid',
        };
    }
}

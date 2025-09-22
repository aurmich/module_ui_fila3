<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use BackedEnum;
<<<<<<< HEAD
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> d3fc412d (.)

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';
    protected string $defaultColor = 'gray-200'; // gray-200
<<<<<<< HEAD
    protected string $selectedColor = 'blue-500'; //'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     *
     * @param string $value
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): null|BackedEnum
    {
        if (!is_string($this->options)) {
            return null;
        }
        if (!enum_exists($this->options)) {
=======
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     * 
     * @param string $value
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?BackedEnum
    {
        if (!is_string($this->options)){
            return null;
        }
        if (! enum_exists($this->options)) {
>>>>>>> d3fc412d (.)
            return null;
        }
        $enumClass = $this->options;
        Assert::isInstanceOf($enumClass, BackedEnum::class);
<<<<<<< HEAD
        Assert::implementsInterface($enumClass, HasColor::class);
        Assert::implementsInterface($enumClass, HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }

    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color = $this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    }

    public function getIconForOption(string $value): null|string
=======
        Assert::implementsInterface($enumClass,HasColor::class);
        Assert::implementsInterface($enumClass,HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }
   
    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color=$this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    
    }

    
    public function getIconForOption(string $value): ?string
>>>>>>> d3fc412d (.)
    {
        return $this->getEnumValue($value)?->getIcon();
    }

    public function defaultColor(string $color): static
    {
        $this->defaultColor = $color;
        return $this;
    }

    public function selectedColor(string $color): static
    {
        $this->selectedColor = $color;
        return $this;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> d3fc412d (.)

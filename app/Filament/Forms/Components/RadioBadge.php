<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Forms\Components\Radio;
=======
use BackedEnum;
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 30328c8 (.)

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';
    protected string $defaultColor = 'gray-200'; // gray-200
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500
<<<<<<< HEAD
   
    public function getColorForOption(string $value): string
    {
       
        if (is_string($this->options) && enum_exists($this->options)) {
            $enumClass = $this->options;
            $color = $enumClass::tryFrom($value)?->getColor();
            return $color ?? $this->selectedColor;
        }
        return $this->selectedColor;
=======

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
            return null;
        }
        $enumClass = $this->options;
        Assert::isInstanceOf($enumClass, BackedEnum::class);
        Assert::implementsInterface($enumClass,HasColor::class);
        Assert::implementsInterface($enumClass,HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }
   
    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color=$this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    
>>>>>>> 30328c8 (.)
    }

    
    public function getIconForOption(string $value): ?string
    {
<<<<<<< HEAD
       
        if (is_string($this->options) && enum_exists($this->options)) {
            $enumClass = $this->options;
            $icon = $enumClass::tryFrom($value)?->getIcon();
            return $icon;
        }
        return null;
=======
        return $this->getEnumValue($value)?->getIcon();
>>>>>>> 30328c8 (.)
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

    
=======
>>>>>>> 30328c8 (.)
}
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
>>>>>>> 819632e (.)

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';
<<<<<<< HEAD

    protected string $defaultColor = 'gray-200'; // gray-200

    protected string $selectedColor = 'blue-500'; // '#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     *
=======
    protected string $defaultColor = 'gray-200'; // gray-200
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     * 
     * @param string $value
>>>>>>> 819632e (.)
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?BackedEnum
    {
<<<<<<< HEAD
        if (! is_string($this->options)) {
=======
        if (!is_string($this->options)){
>>>>>>> 819632e (.)
            return null;
        }
        if (! enum_exists($this->options)) {
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

    
>>>>>>> 819632e (.)
    public function getIconForOption(string $value): ?string
    {
        return $this->getEnumValue($value)?->getIcon();
    }

    public function defaultColor(string $color): static
    {
        $this->defaultColor = $color;
<<<<<<< HEAD

=======
>>>>>>> 819632e (.)
        return $this;
    }

    public function selectedColor(string $color): static
    {
        $this->selectedColor = $color;
<<<<<<< HEAD

        return $this;
    }
}
=======
        return $this;
    }
}
>>>>>>> 819632e (.)

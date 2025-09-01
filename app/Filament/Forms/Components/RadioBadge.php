<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use BackedEnum;
<<<<<<< HEAD
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
>>>>>>> 60908d2 (.)
=======
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> 90e8530 (.)

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90e8530 (.)
    protected string $defaultColor = 'gray-200'; // gray-200
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
<<<<<<< HEAD
     *
=======
    protected string $defaultColor = 'gray-200'; // gray-200
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     * 
     * @param string $value
>>>>>>> 60908d2 (.)
=======
     * 
     * @param string $value
>>>>>>> 90e8530 (.)
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?BackedEnum
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($this->options)) {
=======
        if (!is_string($this->options)){
>>>>>>> 60908d2 (.)
=======
        if (!is_string($this->options)){
>>>>>>> 90e8530 (.)
            return null;
        }
        if (! enum_exists($this->options)) {
            return null;
        }
        $enumClass = $this->options;
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::isInstanceOf($enumClass, BackedEnum::class);
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::implementsInterface($enumClass, HasColor::class);
        Assert::implementsInterface($enumClass, HasIcon::class);
=======
        Assert::implementsInterface($enumClass,HasColor::class);
        Assert::implementsInterface($enumClass,HasIcon::class);
>>>>>>> 90e8530 (.)
        $res = $enumClass::tryFrom($value);
        return $res;
    }
   
    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color=$this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    
    }

<<<<<<< HEAD
=======
=======
        
        // Assert::isInstanceOf($enumClass, BackedEnum::class);
        Assert::true(is_a($enumClass, BackedEnum::class, true), sprintf('%s must be a BackedEnum', $enumClass));
>>>>>>> d78306f (.)
=======
        Assert::isInstanceOf($enumClass, BackedEnum::class);
>>>>>>> 4af699e (.)
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

    
>>>>>>> 60908d2 (.)
=======
    
>>>>>>> 90e8530 (.)
    public function getIconForOption(string $value): ?string
    {
        return $this->getEnumValue($value)?->getIcon();
    }

    public function defaultColor(string $color): static
    {
        $this->defaultColor = $color;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    public function selectedColor(string $color): static
    {
        $this->selectedColor = $color;
<<<<<<< HEAD
<<<<<<< HEAD

        return $this;
    }
}
=======
        return $this;
    }
}
>>>>>>> 60908d2 (.)
=======
        return $this;
    }
}
>>>>>>> 90e8530 (.)

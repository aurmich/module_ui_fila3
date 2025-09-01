<?php

declare(strict_types=1);
/**
 * @see https://filamentphp.com/docs/3.x/forms/fields/types
 * @see https://github.com/Valourite/form-builder/blob/v1.x/src/Filament/Enums/FieldType.php
 */

namespace Modules\UI\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
=======
>>>>>>> 90e8530 (.)
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;


/**
 * Defines the different types of appointments in the system.
<<<<<<< HEAD
 *
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;


/**
 * Defines the different types of appointments in the system.
 * 
>>>>>>> 60908d2 (.)
=======
 * 
>>>>>>> 90e8530 (.)
 * @method static self fromName(string $name)
 * @method static self fromValue(string $value)
 * @method static self tryFromName(string $name)
 * @method static self tryFromValue(string $value)
 * @method static self[] cases()
 */
<<<<<<< HEAD
<<<<<<< HEAD
enum FieldTypeEnum: string implements HasColor, HasIcon, HasLabel
=======
enum FieldTypeEnum: string implements HasLabel, HasIcon, HasColor
>>>>>>> 90e8530 (.)
{
    use TransTrait;
    case TEXT     = 'text';
    //case NUMBER   = 'number';
    case EMAIL    = 'email';
    //case PASSWORD = 'password';
    case TEXTAREA = 'textarea';
    case SELECT   = 'select';
    case RADIO    = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE     = 'date';
    case TIME     = 'time';
    case DATETIME = 'datetime';


    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
enum FieldTypeEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
    case TEXT     = 'text';
    //case NUMBER   = 'number';
    case EMAIL    = 'email';
    //case PASSWORD = 'password';
    case TEXTAREA = 'textarea';
    case SELECT   = 'select';
    case RADIO    = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE     = 'date';
    case TIME     = 'time';
    case DATETIME = 'datetime';


    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 60908d2 (.)
=======
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 90e8530 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return $this->transClass(self::class,$this->value.'.color');
>>>>>>> 60908d2 (.)
=======
        return $this->transClass(self::class,$this->value.'.color');
>>>>>>> 90e8530 (.)

    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 60908d2 (.)
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 90e8530 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
    }
}
=======
        return $this->transClass(self::class,$this->value.'.description');
    }
    

}
>>>>>>> 60908d2 (.)
=======
        return $this->transClass(self::class,$this->value.'.description');
    }
    

}
>>>>>>> 90e8530 (.)

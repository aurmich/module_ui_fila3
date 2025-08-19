<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\UI\Models;
use Spatie\Translatable\HasTranslations;
use LaraZeus\Bolt\Models\Category as LaraZeusCategory;


class Category extends LaraZeusCategory
{
    //use HasTranslations;

    //public array $translatable = [];
} 
=======
namespace Modules\UI\Models;

use Modules\FormBuilder\Models\Category as BaseCategory;

class Category extends BaseCategory
{
    // Alias per soddisfare Laravel
}
>>>>>>> 64e34f5 (.)

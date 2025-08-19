<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\UI\Models;
use Spatie\Translatable\HasTranslations;
use LaraZeus\Bolt\Models\Collection as LaraZeusCollection;


class Collection extends LaraZeusCollection
{
    //use HasTranslations;

    //public array $translatable = [];
} 
=======
namespace Modules\UI\Models;

use Modules\FormBuilder\Models\Collection as BaseCollection;

class Collection extends BaseCollection
{
    // Alias per soddisfare Laravel
}
>>>>>>> 64e34f5 (.)

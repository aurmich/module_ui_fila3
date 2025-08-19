<?php

<<<<<<< HEAD
namespace Modules\UI\Filament\Resources;

use  LaraZeus\Bolt\Filament\Resources\CategoryResource as LaraZeusCategoryResource;



class CategoryResource extends LaraZeusCategoryResource
{
=======
declare(strict_types=1);

namespace Modules\UI\Filament\Resources;

use Modules\Blog\Filament\Resources\CategoryResource as BlogCategoryResource;

/**
 * CategoryResource for UI module extending Blog CategoryResource.
 */
class CategoryResource extends BlogCategoryResource
{
    // Inherit all functionality from Blog CategoryResource
>>>>>>> b883666 (.)
}

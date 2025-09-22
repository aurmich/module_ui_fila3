<?php

declare(strict_types=1);

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Datas\XotData;

abstract class UiBasePolicy
{
    use HandlesAuthorization;

            return true;
        }

        return null;
    }

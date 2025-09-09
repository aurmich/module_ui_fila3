<?php

declare(strict_types=1);

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> d3fc412 (.)
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> ab33b51 (.)
use Modules\Xot\Datas\XotData;

abstract class UiBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> d3fc412 (.)
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> ab33b51 (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> d3fc412 (.)
=======
}
>>>>>>> ab33b51 (.)

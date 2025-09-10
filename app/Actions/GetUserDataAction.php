<?php

namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

    public function execute(): UserData
    {
        $user = Auth::user();

        if (!$user) {
            return new UserData(
                id: 0,
                name: 'Guest',
                email: '',
                avatar: null,
                role: null,
                permissions: [],
                settings: []
            );
        }

        return new UserData(
            id: (int) $user->id,
            name: $user->name ?? '',
            email: $user->email ?? '',
            avatar: $user->avatar ?? null,
            role: $user->role ?? null,
            permissions: $user->permissions->toArray(),
            settings: $user->settings ?? []
        );
    }
} 
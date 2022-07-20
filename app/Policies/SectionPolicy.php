<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class SectionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */

    // 06.07.2022. Просматривать может любый авторизованный юзер
    public function view(User $user)
    {
        return Auth::user();
    }

    // 06.07.2022. Изменять ресурс может Super Admin или Управляющий
    public function update(User $user)
    {
        if ($user->hasRole('Super Admin') || $user->hasRole('Управляющий'))
        {
            return true;
        }
    }

    // Для работы с другими методами - https://nova.laravel.com/docs/4.0/resources/authorization.html

    // Лучшая практика - https://spatie.be/docs/laravel-permission/v5/best-practices/roles-vs-permissions
}

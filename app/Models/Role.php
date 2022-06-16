<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;


class Role extends Model
{
    use HasFactory, HasPermissions;

    protected $guarded = [];

    // 9.06. Переписал логику для правильной связи
//    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        return $this->belongsToMany(
//            config('permission.models.permission'),
//            config('permission.table_names.role_has_permissions')
//        );
//    }

    // 16.06. Нужно настроить связь между Ролью и Юзерами, у которых есть эта роль
//    public function users(): \Illuminate\Database\Eloquent\Relations\belongsToMany
//    {
//        // Находит id ролей
//        return $this->belongsToMany(User::class);
//    }

}

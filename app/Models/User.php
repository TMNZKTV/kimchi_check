<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;



class User extends Authenticatable
{
    // 2.06. Добавил к модели Юзера HasRoles от Spatie
    use HasRoles,HasPermissions, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function place() {
        return $this->belongsTo(Place::class);
    }

//    public function mainBranch () {
//        return $this->belongsTo(MainBranch::class);
//    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'supervisor',
        'place_id',
        'pid',
        'stpid',
        'tags' ,
        'description',
        'title' ,
        'img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

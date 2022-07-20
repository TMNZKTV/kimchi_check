<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 5.07.2022.
    // Каждая секция принадлежит роли
//    public function roles() {
//        return $this->belongsToMany(Role::class);
//    }

    public function courses() {
        return $this->hasMany(Course::class);
    }
    public function statistic() {
        return $this->hasMany(Statistic::class);
    }
}

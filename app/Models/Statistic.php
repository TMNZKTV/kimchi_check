<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function sections() {
        return $this->belongsToMany(Category::class);
    }
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
    public function tests() {
        return $this->belongsToMany(Test::class);
    }
}

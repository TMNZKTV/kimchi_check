<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $casts = [
        'date' => 'date'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function tests() {
        return $this->hasMany(Test::class);
    }

    public function statistic() {
        return $this->hasMany(Statistic::class);
    }

}

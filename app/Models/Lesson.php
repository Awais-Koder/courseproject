<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public $fillable = ['name' ,'level_id'];

    public function content()
    {
        return $this->hasMany(Content::class);
    }
    public function manyLesson()
    {
        return $this->belongsToMany(Level::class);
    }
}

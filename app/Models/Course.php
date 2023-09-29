<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $fillable = ['name','details','image','status'];

    public function levels()
    {
        return $this->hasMany(Level::class);
    }
    // belongs to 
    public function manyLevels()
    {
        return $this->belongsToMany(Level::class);
    }
    public function student(){
        return $this->belongsToMany(Profile::class);
    }
}

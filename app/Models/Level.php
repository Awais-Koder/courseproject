<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Level extends Model
{
    use HasFactory;
    public $fillable = ['name' , 'status' ,'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function manyCourse()
    {
        return $this->belongsToMany(Course::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function tests(){
        return $this->belongsToMany(Test::class);
    }
}

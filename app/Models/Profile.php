<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'nationality', 'telephone', 'hearing', 'message', 'user_id', 'image', 'selected_date', 'address', 'roll_no', 'status','p_test','p_test_link'];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    
    public function registerForCourse($courseId)
    {
        if (!$this->courses->contains($courseId)) {
            $this->courses()->attach($courseId);
        }
    }
}

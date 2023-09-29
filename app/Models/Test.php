<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public $fillable = ['link'];
    public function levels(){
        return $this->belongsToMany(Level::class);
    }
}

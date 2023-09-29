<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    public $fillable = ['student_name' , 'issue_date' , 'certificate_name','certificate_number'];
}

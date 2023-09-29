<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class StudentCourseController extends Controller
{
    public function index($id){
        $student = Profile::with('courses.manyLevels')->find($id);
        return view('Admin.student.selected-courses' , compact('student'));
    }
}

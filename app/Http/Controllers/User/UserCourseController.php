<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Support\Facades\Session;

class UserCourseController extends Controller
{
    public function courses()
    {
        $courses = Course::all();
        return view('home.course.courses',compact('courses'));
    }
    public function details($id)
    {
        $decoedId = base64_decode($id);
        $r_course = Course::find($decoedId);
        $randomCourses = Course::inRandomOrder()->take(5)->get();
        return view('home.course.course-details',compact('r_course' ,'randomCourses'));
    }
    public function register(Request $request,$id)
    {
        $decodedId = base64_decode($id);
        $email = Profile::where('email', $request->email)->first();

        if(empty($email)){
            return redirect('register/user');
        }else{
            $student = Profile::find($email->id);
            $student = Profile::where('email',$request->email)->first();
            if ($student->registerForCourse($decodedId)) {
                $student->status = 'pending';
                $student->save();
            }else {
                return redirect()->back()->with('Error' , 'Course is already registered.');
            }
            return redirect()->back();
        }
    }
}

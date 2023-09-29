<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserCourseContentController extends Controller
{
    public function index($id)
    {
        if (session()->has('email')) {
            $email = session()->get('email');
            $profile = Profile::with(['courses' => function ($query) {
                $query->where('status', 'shown')->with(['manyLevels' => function ($subQuery) {
                    $subQuery->where('status', 'shown')->with(['lessons', 'tests']);
                }]);
            }])->where('email', $email)->first();
            return view('user.contents.index', compact('profile'));
        } else {
            return redirect()->back();
        }
    }
}

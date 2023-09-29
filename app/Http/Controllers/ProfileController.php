<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserProfileRequest;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.create');
    }

    public function create(CreateUserProfileRequest $request)
    {
        $input = $request->all();
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ0123456789';
        $randomString = Str::random(2, $characters) . Str::random(2, '0123456789');
        $timestampPart = substr(time(), -2);
        $uniqueID = $randomString . $timestampPart;
        while (Profile::where('roll_no', $uniqueID)->exists()) {
            $randomString = Str::random(2, $characters) . Str::random(2, '0123456789');
            $uniqueID = $randomString . $timestampPart;
        }
        $uniqueID = 'ST' . $uniqueID;
        $input['roll_no'] = $uniqueID;
        $input['status'] = 'pending';
        if (!empty($request->p_test)) {
            $input['p_test'] = 'true';
        }
        $student = Profile::create($input);
        $selectedCourseIds = $request->input('course_id', []);
        $student->courses()->attach($selectedCourseIds);
        return redirect('user/dashboard');
    }
    public function showDashboard()
    {
        $course = false;
        return view('user.dashboard.dashboard', compact('course'));
    }
    public function dashboard(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $email = $request->email;
        $profile = Profile::where('email', $email)->first();
        if ($profile->status === 'approved' && $profile->p_test === 'true') {
            $test_link = $profile->p_test_link;
            // dd($test_link);
            return view('user.dashboard.proficiency-test',compact('test_link'));
        } else {
            if (!$profile) {
                return redirect()->back()->with('error', 'Email not found');
            } elseif ($profile->status === 'pending') {
                return view('user.dashboard.pending_message');
            } elseif ($profile->status === 'approved') {
                session()->put('email', $email);
                $courses = $profile->courses()->where('status', 'shown')->get();
                return view('user.dashboard.courses', compact('courses'));
            }
        }
    }
}

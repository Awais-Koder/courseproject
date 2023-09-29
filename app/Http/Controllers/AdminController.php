<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = Profile::with('courses')->where('status', 'pending')->paginate(10);
        $all_courses = Course::all()->count();
        $all_students = Profile::all()->count();
        $all_pending = Profile::with('courses')->where('status', 'pending')->count();
        $all_approved = Profile::with('courses')->where('status', 'approved')->count();
        return view('Admin.index', compact('users', 'all_courses', 'all_approved', 'all_pending', 'all_students'));
    }
    public function proficiencyUsers()
    {
        $users = Profile::where('p_test', 'true')->paginate(10);
        return view('Admin.student.proficiency-test', compact('users'));
    }
    public function storeProficiencyTestLInk(Request $request, $id)
    {
        $student = Profile::find($id);
        $student->p_test_link = $request->p_test_link;
        $student->save();
        return redirect()->back();
    }
    public function updateStatus($id)
    {
        $student = Profile::find($id);
        if ($student && $student->status == 'pending') {
            $student->update(['status' => 'approved']);
        }
        return redirect()->back();
    }
    public function viewDetails($id)
    {
        $student = Profile::with('courses')->find($id);
        return view('Admin.student.view-details', compact('student'));
    }
    public function approvedStudents()
    {
        $users = Profile::with('courses')->where('status', 'approved')->paginate(10);
        return view('Admin.student.approved-students', compact('users'));
    }
    public function deleteStudent($id)
    {
        $student = Profile::find($id);
        if ($student) {
            $student->courses()->detach();
            $student->delete();
            return redirect()->back();
        } else {
            return ['message' => 'student not found'];
        }
    }
    public function showAccount()
    {
        return view('Admin.account.show-account');
    }
    public function updateAccount(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
        $id = Auth::id();
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = Profile::where('name', 'like', "%$query%")->orWhere('email', 'like', "%$query%")->orWhere('telephone', 'like', "%$query%")->paginate(15);
        return view('Admin.student.searched-students', compact('users','query'));
    }
}

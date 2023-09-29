<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('Admin.courses.index', compact('courses'));
    }
    public function create()
    {
        return view('Admin.courses.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image',
        ]);
        $input = $request->all();
        $input['image'] = $request->file('image')->store('course', 'public');
        $input['status'] = 'hidden';
        Course::create($input);
        return redirect()->back();
    }
    public function edit($id)
    {
        $course = Course::find($id);
        if ($course) {
            return view('Admin.courses.edit', compact('course'));
        } else {
            return ['not found'];
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);
        $course  = Course::find($id);
        if ($request->hasFile('image')) {
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            $course->image = $request->file('image')->store('course', 'public');
        }
        $course->update($request->except('image'));
        return redirect()->back();
    }
    public function delete($id)
    {
        $course = Course::with('manyLevels.lessons.content')->find($id);
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }
        // manyLevels.lessons.content
        foreach ($course->manyLevels as $level) {
            // dd($level->id);
            $course->manyLevels()->detach($level->id);
            $level->delete();
            foreach ($level->lessons as $lesson) {
                $lesson->manyLesson()->detach($level->id);
                $lesson->delete();
                foreach ($lesson->content as $content) {
                    $content->delete();
                }
            }
        }
        $course->delete();
        return redirect()->back();
    }
    // update course status
    public function updateStatus($id)
    {
        $course = Course::find($id);
        $course->status = $course->status === 'hidden' ? 'shown' : 'hidden';
        $course->save();
        return redirect()->back();
    }
}

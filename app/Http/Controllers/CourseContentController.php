<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Level;
use App\Rules\OneOfTwoFieldsSelected;

class CourseContentController extends Controller
{
    public function index($courseid)
    {
        $course = Course::with('manyLevels')->where('id', $courseid)->get();
        return view('Admin.contents.create', compact('course'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'lesson_name' => 'required',
            'content' => 'required',
            'course_id' => 'required',
            'level_id' => ['required_without:level_name', new OneOfTwoFieldsSelected],
            'level_name' => ['required_without:level_id', new OneOfTwoFieldsSelected],
        ]);
        if (!empty($request->level_id && !empty($request->level_name))) {
            echo 'Only one field should be selected';
            die;
        }
        $course = Course::find($request->course_id);

        if (!empty($request->level_name)) {
            $level = Level::create([
                'name' => $request->level_name, 
                'course_id' => $request->course_id,
                'status' => 'hidden'
            ]);
            $level_id = $level->id;
            $course->manyLevels()->attach($level_id);
        } else {
            $level_id = $request->level_id;
        }

        $lesson = Lesson::create(['name' => $request->lesson_name, 'level_id' => $level_id]);
        $lesson->manyLesson()->attach($level_id);
        Content::create(['name' => $request->content, 'lesson_id' => $lesson->id]);
        return redirect('/view/courses');
    }
    public function view($id)
    {
        $course = Course::with('manyLevels.lessons.content')->find($id);
        return view('Admin.contents.view', compact('course'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required',
            'content_id' => 'required',
            'level_id' => 'required',
            'course_id' => 'required',
            'lesson_name' => 'required',
            'content' => 'required',
            'level_name' => 'required',
            'course_name' => 'required',
        ]);

        $courseId = $request->input('course_id');
        $courseName = $request->input('course_name');
        $lessonIds = $request->input('lesson_id');
        $contentIds = $request->input('content_id');
        $levelIds = $request->input('level_id');
        $lessonNames = $request->input('lesson_name');
        $contentNames = $request->input('content');
        $levelNames = $request->input('level_name');

        $course = Course::find($courseId);
        $course->update(['name' => $courseName]);
        foreach ($lessonIds as $index => $lessonId) {
            $lesson = Lesson::find($lessonId);
            if ($lesson) {
                $lesson->update(['name' => $lessonNames[$index]]);
            }
        }
        // Update Content records
        foreach ($contentIds as $index => $contentId) {
            $content = Content::find($contentId);
            
            if ($content) {
                $content->update(['name' => $contentNames[$index]]);
            }
        }
        // Update Level records
        foreach ($levelIds as $index => $levelId) {
            $level = Level::find($levelId);
            if ($level) {
                $level->update(['name' => $levelNames[$index]]);
            }
        }
        return redirect()->back();
    }
}

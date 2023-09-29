<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(Request $request, $levelId)
    {
        $request->validate([
            'link' => 'required',
        ]);
        $courseId = $request->course_id;
        $level = Course::where('id', $courseId)->with(['manyLevels' => function ($query) use ($levelId) {
            $query->where('levels.id', $levelId);
        }])->get();
        $test = Test::create($request->all());
        foreach($level as $level){
           foreach($level->manyLevels as $level){
            $level->tests()->attach($test->id);
           }
        }
        return redirect()->back();
    }
    public function show($levelId){
        $levels = Level::where('id',$levelId)->with('tests')->get();
        return view('Admin.tests.index' , compact('levels'));
    }
    public function delete($testid,$levelId){
        $level = Level::find($levelId);
        $level->tests()->detach($testid);
        Test::find($testid)->delete();
        return redirect()->back();
    }
}

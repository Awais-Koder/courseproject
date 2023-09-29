<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::paginate(10);
        return view('Admin/fileManager/index', compact('files'));
    }
    public function show()
    {
        return view('Admin.fileManager.create');
    }
    public function store(Request $request)
    {
        $request->validate(['name' => 'required','file' => 'required']);
        $input = $request->all();
        if(!empty($request->footer_file)){
            $input['flag'] = 'footer';
        }else{
            $input['flag'] = 'other';
        }
        $input['file'] = $request->file('file')->store('file' , 'public');
        File::create($input);
        return redirect()->back();
    }
    public function delete($id){
        $file = File::find($id);
        if ($file->file) {
            Storage::disk('public')->delete($file->file);
        }
        $file->delete();
        return redirect()->back();
    }
}

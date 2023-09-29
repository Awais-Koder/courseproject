<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class UserFileController extends Controller
{
    public function index(){
        $files = File::where('flag' ,'other')->paginate(50);
        return view('home.files.index' , compact('files'));
    }
}

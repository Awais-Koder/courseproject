<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function updateStatus($id){
        $level = Level::find($id);
        $level->status = $level->status === 'hidden' ? 'shown' : 'hidden';
        $level->save();
        return redirect()->back();
    }
}

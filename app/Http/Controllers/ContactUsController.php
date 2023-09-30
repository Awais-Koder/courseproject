<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('home.contact.contact-us');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);
        $input = $request->all();
        Contact::create($input);
        return redirect()->back();
    }
    public function show(){
        $messages = Contact::paginate(15);
        return view('Admin.messages.index' , compact('messages'));
    }
    public function view($id){
        $message = Contact::find($id,['id' , 'message']);
        return view('Admin.messages.details' , compact('message'));
    }
    public function delete($id){
        Contact::find($id)->delete();
        return redirect('/messages');
    }
}

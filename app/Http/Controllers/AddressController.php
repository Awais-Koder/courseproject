<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return view('Admin.address.index');
    }
    public function create()
    {
        return view('Admin.address.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        Address::create($request->all());
        return view('Admin.address.create');
    }
    public function delete($id)
    {
        $item = Address::find($id);
        if ($item) {
            $item->delete();
        } else {
            return ['id not found'];
        }
        return redirect()->back();
    }
}

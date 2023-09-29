<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function create(){
        return view('Admin.certification.create');
    }
    public function check(){
        $certificate  = [];
        return view('home.certificate.check-validity',compact('certificate'));
    }
    public function validateCertificate(Request $request){
        $request->validate([
            'query' => 'required|string',
        ]);
        $query = $request->input('query');
        $certificate = Certificate::where('certificate_number',$query)->get();
        return view('home.certificate.check-validity',compact('certificate'));
    }
    public function store(Request $request){
        $request->validate([
            'student_name' => 'required',
            'issue_date' => 'required|date',
            'certificate_name' => 'required',
            'certificate_number' => 'required',
        ]);
        Certificate::create($request->all());
        return redirect()->back();
    }
}

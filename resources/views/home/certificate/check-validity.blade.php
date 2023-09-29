@extends('layouts.app')

@section('content')
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>check <span>Certificate Validity</span></h2>
                    <p>"Welcome to Adepts institute! Explore a transformative learning journey with our dynamic online
                        course. Dive into engaging modules, interactive discussions, and expert-led instruction that will
                        empower you. Join our community of learners and unlock your potential today!"</p>
                </div>
            </div>
            <div class="row">
                <form action="validate/certificate">
                    <div class="col-md-12 col-sm-6 mob-hide">
                        <form class="app-search">
                            <input type="search" placeholder="Enter Certificate Number here..." class="form-control" style="font-size:15px; padding: 30px 10px;" name="query">
                            <button class="btn">
                                check validty
                            </button>
                        </form>
                    </div>
                </form>
            </div>
            @if(!empty($certificate))
            <div class="row">
                @if(count($certificate)>0)
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Certificate name</th>
                                    <th scope="col">Certificate number</th>
                                    <th scope="col">Issued date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificate as $key=>$certificate)
                                <tr class="">
                                    <td scope="row">{{$key+=1}}</td>
                                    <td scope="row">{{$certificate->student_name}}</td>
                                    <td scope="row">{{$certificate->certificate_name}}</td>
                                    <td scope="row">{{$certificate->certificate_number}}</td>
                                    <td scope="row">{{$certificate->issue_date}}</td>
                                    <td scope="row" style="color:green;">Authenticated ✓</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                @else
                <div class="col-md-12 col-sm-12" style="margin-top: 10px">
                    <h1 class="text-danger">Record Not Found !</h1>
                </div>
                @endif
            </div>
            @endif
        </div>
    </section>
    @include('home.footer-files')
@endsection

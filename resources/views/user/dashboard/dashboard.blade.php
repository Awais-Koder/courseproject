@extends('layouts.app')

@section('content')
<section>
    <style>
        .input-field label {
            position: relative;
        }
    </style>



    <div class="pro-cover">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif


    </div>
    <div class="stu-db">
        <div class="container pg-inn">
            <div class="col-md-12">
                <div class="udb">
                    <div class="udb-sec udb-cour">
                        <h4><img src="assets/images/icon/db2.png" alt=""> Check your enrollment status</h4>
                        <div class="sdb-cours">
                            <form action="/open/dashboard" method="GET">
                                @csrf
                                <div class="input-field ">
                                    <label class="" style="font-size: 20px">Enter Your Email <span
                                            class="text-danger">*</span></label>
                                    <input type="text" value="" class="validate" autocomplete="off" name="email"
                                        style="font-size: 13px">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn-large waves-input-wrapper">
                                            <input type="submit" value="Check Status" class="waves-button-input"
                                                style="font-size: 20px"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Account Settings</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="/update/admin/account">
                                @csrf
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="name" style="font-size: 15px" value="{{Auth::user()->name}}">
                                    <label class="" style="font-size: 15px">Admin Name</label>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="email" class="validate" name="email" style="font-size: 15px" value="{{Auth::user()->email}}">
                                    <label class="" style="font-size: 15px">Enter Email</label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" class="validate" name="password" style="font-size: 15px" autocomplete="off">
                                    <label class="" style="font-size: 15px">Enter Password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" class="validate" name="password_confirmation" style="font-size: 15px" autocomplete="off">
                                    <label class="" style="font-size: 15px">Enter Confirm Password</label>
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="waves-effect waves-light btn waves-input-wrapper" style="font-size: 15px">
                                            <input type="submit" class="waves-button-input" value="Submit"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

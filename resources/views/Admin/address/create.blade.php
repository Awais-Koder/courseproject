@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add Address</h4>
                        </div>
                        <div class="tab-inn">
                            <form method="POST" action="/store/address">
                                @csrf
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="address" style="font-size: 15px">
                                    <label class="" style="font-size: 15px">Address Line : (eg,countary,street)</label>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="phone" style="font-size: 15px">
                                    <label class="" style="font-size: 15px">Enter Phone : (+123 , 45678)</label>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="email" style="font-size: 15px">
                                    <label class="" style="font-size: 15px">Enter Email</label>
                                    @error('email')
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

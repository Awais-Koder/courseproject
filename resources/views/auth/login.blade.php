@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2 valign-wrapper " style="height: 100vh; display: flex; align-items: center;">
            <div class="card" style="width:100%">
                <div class="card-content" >
                    <span class="card-title">{{ __('Login') }}</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate @error('email') invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus style="font-size: 15px">
                                <label for="email">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="text-danger" data-error="{{ $message }}" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate @error('password') invalid @enderror" name="password" required autocomplete="off" style="font-size: 15px">
                                <label for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="text-danger" data-error="{{ $message }}" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <button type="submit" class="btn waves-effect waves-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

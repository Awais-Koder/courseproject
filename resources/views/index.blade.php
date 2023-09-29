@extends('layouts.app')

@section('content')
<!-- mobile navbar -->
    @include('home.slider')
    @include('home.quick-links')
    @include('home.events')
    @include('home.popular-courses')
    @include('home.gallery')
    @include('home.footer-files')
    @include('home.social-media')
@endsection
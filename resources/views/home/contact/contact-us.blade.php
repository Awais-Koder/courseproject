@extends('layouts.app')
<style>
    .overlay-contact{
        position: static !important;
        width: auto !important;
        margin-top: 0px !important;
    }
</style>
@section('content')
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Welcome to Adept, your gateway to a world of knowledge and skill-building. We're dedicated to
                                helping you unlock your potential through our wide range of courses and resources.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="display: flex;justify-content: center;padding: 0px 20px;">
        <div class="overlay-contact footer-part footer-part-form">
            <div class="map-head">
                <p>Send Us Now</p>
                <h2>Get In Touch</h2> <span class="footer-ser-re">Service Request Form</span>
            </div>
            <!-- ENQUIRY FORM -->
            <form id="contact_form" name="contact_form" action="/store/message" method="POST">
                @csrf
                <ul>
                    <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                        <input type="text" id="f1" value="" name="name" placeholder="Name">
                        @error('name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </li>
                    <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                        <input type="text" id="f2" value="" name="number" placeholder="Phone">
                    </li>
                    <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                        <input type="text" id="f3" value="" name="city" placeholder="City">
                    </li>
                    <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                        <input type="text" id="f4" value="" name="countary" placeholder="Country">
                    </li>
                    <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                        <textarea id="f5" name="message" placeholder="message"></textarea>
                        @error('message')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </li>
                    <li class="col-md-2">
                        <input type="submit" value="SUBMIT">
                    </li>
                </ul>
            </form>
        </div>
    </section>
    @include('home.social-media')
    @include('home.footer-files')
@endsection

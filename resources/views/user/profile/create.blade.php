@extends('layouts.app')
@section('content')
    <style>
        .input-field label {
            position: relative;
        }
    </style>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="/profile/create" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s3">
                                    <label class="">Name <span class="text-danger">*</span></label>
                                    <input type="text" value="" class="validate" autocomplete="off" name="name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s3">
                                    <label class="">Email <span class="text-danger">*</span></label>
                                    <input type="text" value="" class="validate" autocomplete="off" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s3">
                                    <label class="">Nationality <span class="text-danger">*</span></label>
                                    <input type="text" value="" class="validate" autocomplete="off"
                                        name="nationality">
                                    @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s3">
                                    <label class="">whatsapp <span class="muted">(optional)</span></label>
                                    <input type="tel" class="validate" value="" autocomplete="off" min="0"
                                        name="telephone">
                                    @error('telephone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label class="">Date of birth <span class="muted">(optional)</span></label>
                                    <input type="date" class="validate select_date" value="" autocomplete="off"
                                        id="date">
                                    @error('selected_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- -->
                                <script>
                                    let date = document.querySelector('.select_date');
                                    date.addEventListener('input', function() {
                                        date.setAttribute("name", "selected_date");
                                        console.log(date)
                                    });
                                </script>
                                <!-- -->
                                <div class="input-field col s6">
                                    <label class="">Address <span class="muted">(optional)</span></label>
                                    <input type="tel" class="validate" value="" autocomplete="off" min="0"
                                        name="address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label class="">Where do you here about us? <span
                                            class="muted">(optional)</span></label>
                                    <select name="hearing" id="">
                                        <option selected disabled value="">Where do you here about us?</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Google">Google</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="From a friend">From a friend</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @error('hearing')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s6">
                                    <label class="">Course/profiency test<span class="text-danger">*</span></label>
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li class="">
                                            <div class="collapsible-header">select courses / profiency test</div>
                                            <div class="collapsible-body cor-tim-tab"
                                                style="padding-top: 10px; margin-top: 0px; margin-bottom: 0px; display: none;">
                                                <h6>select courses</h6>
                                                @foreach (App\services\CourseService::getCourses() as $item)
                                                    <input type="checkbox" id="{{ $item->id }}" class="filled-in"
                                                        name="course_id[]" value="{{ $item->id }}" />
                                                    <label for="{{ $item->id }}">{{ $item->name }}</label>
                                                @endforeach
                                                <br>
                                                @error('course_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="collapsible-body cor-tim-tab"
                                                style="padding-top: 10px; margin-top: 0px; padding-bottom: 10px; margin-bottom: 0px; display: none;">
                                                <hr>
                                                <h6 for="">Apply for test</h6>
                                                <input type="checkbox" id="profiencytest" class="filled-in"
                                                    name="p_test" value="true" />
                                                <label for="profiencytest">profiency test</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label class="">Message <span class="muted">(optional)</span></label>
                                    <textarea type="text" value="" class="validate" autocomplete="off" name="message"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper">
                                        <input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                            <input type="hidden" name="roll_no" id="">
                            <input type="hidden" name="status">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

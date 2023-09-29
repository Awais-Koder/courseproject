@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Issue Certificate</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="store/certificate" enctype="multipart/form-data">
                            @csrf
                            <h4>Issue new certificate</h4>
                            <div class="row ad-p-lr ad-mar-bot-20">
                                <div class="input-field col s12">
                                    <input type="text" class="validate" name="student_name" style="font-size: 15px">
                                    <label class="" style="font-size: 15px">student name</label>
                                    @error('student_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <span class="" style="font-size: 15px">issued date</span>
                                    <input type="date" value="" class="validate" name="issue_date"
                                        style="font-size: 15px">
                                    @error('issue_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate" name="certificate_name"
                                        style="font-size: 15px">
                                    <label class="" style="font-size: 15px">certificate name</label>
                                    @error('certificate_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate" name="certificate_number"
                                        style="font-size: 15px" id="certificate_number">
                                    <label class="" style="font-size: 15px">certificate name</label>
                                    @error('certificate_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn waves-effect waves-light">
                                    {{ __('Issue certification') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function generateUniqueNumber(length) {
            const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*?";
            const charactersLength = characters.length;
            let uniqueNumber = "";

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * charactersLength);
                uniqueNumber += characters.charAt(randomIndex);
            }

            return uniqueNumber;
        }

        const uniqueNumber = generateUniqueNumber(20);
        document.getElementById('certificate_number').value = 'ADEPT-' + uniqueNumber;
    </script>
@endsection

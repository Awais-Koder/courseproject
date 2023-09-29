@extends('layouts.app')

@section('content')
    <section>
        <style>
            .input-field label {
                position: relative;
            }
        </style>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="javascript:void(0)" class="pro-act">My Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn" style="margin: 10p 0px">
                <div class="col-md-12">
                    <div class="udb">
                        <div class="udb-sec udb-cour">
                            <h4><img src="assets/images/icon/db2.png" alt="">Your proficiency Test</h4>
                            <p>Your links for the test wil be shown here.</p>
                            <div class="sdb-cours">
                                <ul>
                                    @if(!empty($test_link))
                                    <li style="margin-top: 15px">
                                        <a href="{{$test_link}}">Go for test</a>
                                    </li>
                                    @else
                                    <li style="margin-top: 15px">
                                        <strong class="text-danger">No link found yet..</strong>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

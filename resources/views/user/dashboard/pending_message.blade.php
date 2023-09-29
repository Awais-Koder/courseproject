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
                            <h4><img src="assets/images/icon/db2.png" alt="">Request pending...</h4>
                            <p>Please wait for the next 24 hours for your request to be reviewed. Thank you</p>
                            <div class="sdb-cours">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

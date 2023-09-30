@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Messages</h4>
                        </div>
                        <div class="tab-inn">
                           {{$message->message}}
                           <ul style="margin: 10px 0px">
                            <li>
                                <a href="messages" class="btn btn-primary">back</a>
                                <a href="/delete/message/{{$message->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                            </li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

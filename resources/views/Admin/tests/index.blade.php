@extends('Admin.layouts.app')

@section('content')
    <div class="sb2-2">
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                        <div class="sb2-2-add-blog sb2-2-1">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>All Tests</h4>
                                </div>
                            </div>
                            <hr>
                            @foreach ($levels as $level)
                                <div class="cor-p4">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li class="">
                                            <div class="collapsible-header">{{ $level->name }}</div>
                                            <div class="collapsible-body cor-tim-tab"
                                                style="padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px; display: none;">
                                                <div class="row">
                                                    @if(count($level->tests)>0)
                                                    <!--== Country Campaigns ==-->
                                                    <div class="col-md-12">
                                                        <div class="box-inn-sp">
                                                            <div class="tab-inn">
                                                                <div class="table-responsive table-desi">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Test Link</th>
                                                                                <th>Go to test</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($level->tests as $test)
                                                                                <tr>
                                                                                    <td>
                                                                                        <span
                                                                                            class="txt-dark weight-500">{{ $test->link }}</span>
                                                                                    </td>
                                                                                    <td><a href="{{ $test->link }}"
                                                                                            class="btn btn-sm"
                                                                                            style="color: white">Go to</a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a
                                                                                            href="delete/test/{{ $test->id }}/{{$level->id}}"><span
                                                                                                class="label label-danger">Delete</span></a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="col-md-12">
                                                        <p>No tests found..</p>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

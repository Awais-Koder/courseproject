@extends('Admin.layouts.app')

@section('content')
<div class="sb2-2">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title" style="display: flex;width:100%;justify-content:space-between">
                        <h4>Student Details</h4>
                    </div>
                    <div class="col-md-9">
                        <div class="udb">

                            <div class="udb-sec udb-prof">
                                <h4><img src="assets/images/icon/db1.png" alt=""> Student Profile</h4>
                                <div class="sdb-tabl-com sdb-pro-table">
                                    <table class="responsive-table bordered">
                                        <tbody>
                                            <tr>
                                                <td>Student Name</td>
                                                <td>:</td>
                                                <td>{{$student->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Student Id</td>
                                                <td>:</td>
                                                <td>{{$student->roll_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>Eamil</td>
                                                <td>:</td>
                                                <td>{{$student->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>:</td>
                                                <td>{{$student->telephone}}</td>
                                            </tr>
                                            <tr>
                                                <td>Date of birth</td>
                                                <td>:</td>
                                                <td>{{$student->selected_date ?? 'null'}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:</td>
                                                <td>{{$student->address ?? 'null'}}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td><span class="db-done">{{$student->status}}</span> </td>
                                            </tr>
                                            @if($student->p_test != null)
                                            <tr>
                                                <td>profiency test</td>
                                                <td>:</td>
                                                <td>
                                                    <span class="db-done">
                                                        <span style="text-decoration: underline;">{{$student->p_test}}</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>selected courses</td>
                                                <td>:</td>
                                                <td>
                                                    <span class="db-done">
                                                        <a href="view/selected/courses/{{$student->id}}" style="text-decoration: underline;">View courses</a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
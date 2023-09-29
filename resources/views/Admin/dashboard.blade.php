<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>All Courses</h5>
                        <h4>{{$all_courses}}</h4>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Pending</h5>
                        <h4>{{$all_pending}}</h4>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Approved</h5>
                        <h4>{{$all_approved}}</h4>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Total</h5>
                        <h4>{{$all_students}}</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    @if(count($users) > 0)
                    <div class="inn-title">
                        <h4>Student Details</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Id</th>
                                        <th>Date of birth</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td><a href="javascript:void(0)"><span class="list-enq-name">{{$user->name}}</span><span
                                                    class="list-enq-city">{{$user->address}}</span></a>
                                        </td>
                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->nationality}}</td>
                                        <td>{{$user->roll_no}}</td>
                                        <td>{{ $user->selected_date ?? 'null' }}</td>
                                        <td>
                                            <a href="approve/status/{{$user->id}}" title="update status"
                                                onclick="return confirm('Are you sure you want to update status?');">
                                                <span class="label label-danger">{{$user->status}}</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="view/details/{{$user->id}}">
                                                <span class="label label-success">view</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="delete/student/{{$user->id}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                <span class="label label-danger">Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <div class="inn-title">
                        <h4>No pending requests found</h4>
                    </div>
                    @endif
                </div>
                <div class="pg-pagina">
                    <ul class="pagination">
                        <!-- Previous Page Link -->
                        @if ($users->onFirstPage())
                            <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        @else
                            <li class=""><a href="{{ $users->previousPageUrl() }}"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i></a></li>
                        @endif
                
                        <!-- Pagination Elements -->
                        @for ($i = 1; $i <= $users->lastPage(); $i++)
                            @if ($i == $users->currentPage())
                                <li class=""><a href="{{ $users->url($i) }}">{{ $i }}</a></li>
                            @else
                                <li class=""><a href="{{ $users->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor
                
                        <!-- Next Page Link -->
                        @if ($users->hasMorePages())
                            <li class=""><a href="{{ $users->nextPageUrl() }}"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></li>
                        @else
                            <li class="disabled"><a><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

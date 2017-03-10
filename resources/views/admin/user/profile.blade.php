@extends('layouts.admin_app')


@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-profile">
                <div class="panel-body">

                    <img src="/prof_image/{{$users->picture_path}}" class="img-circle">
                    <div class="name">{{$users->name}}</div>
                    <div class="info">{{$users->course}}</div>
                    <ul class="list-inline text-center">
                    <!--true-->
                        <li><span class="label label-success">&nbsp; Registered &nbsp;&nbsp;</span></li>
                    </ul>

                    {{--{{/each}}--}}
                </div>
            </div><!-- panel -->
            <div class="list-group list-group-alternate mb-n nav nav-tabs">
                <a href="#tab-about" 	role="tab" data-toggle="tab" class="list-group-item active">
                    <i class="ti ti-user"></i>
                    About Agent
                </a>

                <a href="#" 	role="tab" data-toggle="tab" class="list-group-item">&nbsp;</a>
            </div>
        </div><!-- col-sm-3 -->
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-about">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>About Agent</h2>
                        </div>
                        <div class="panel-body">
                            <div class="about-area">
                                <h4>Bio</h4>
                                <p>
                                    <strong>{{$users->name}}</strong> is a <strong>{{$users->course}}</strong> Student of Covenant University ....

                                </p>
                            </div>
                            <div class="about-area">
                                <h4>Basic Information</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td><a href="#">{{$users->name}}</a></td>
                                        </tr>

                                        <tr>
                                            <th>Matric No</th>
                                            <td>{{$users->matric_no}}</td>
                                        </tr>

                                        <tr>
                                            <th>Email</th>
                                            <td><a href="#">{{$users->email}}</a></td>
                                        </tr>

                                        <tr>
                                            <th>Course</th>
                                            <td>{{$users->course}}</td>
                                        </tr>

                                        <tr>
                                            <th>&nbsp;</th>
                                            <td>&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .tab-content -->
        </div><!-- col-sm-8 -->
    </div>
@endsection


@extends('layouts.admin_app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{'activePage'}} </h2>
            <div class="panel-ctrls"></div>
        </div>
        <div class="panel-body no-padding">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Matric No</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @if($student_infos)
                    @foreach($student_infos as $student_info)
                        <tr class="odd gradeX"  >
                            <td></td>
                            <td>{{$student_info->matric_no}}</td>
                            <td>{{$student_info->name}}</td>
                            <td>{{$student_info->course}}</td>
                            <td>
                                @if($student_info->is_registered == 1)
                                    <span class="label label-success">&nbsp; Registered &nbsp;&nbsp;</span>
                                @else
                                    <span class="label label-danger">Not Registered</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            @if($error)
                <div class="center-block text-center">
                    <br>
                    <div class="col-xs-9 alert alert-danger" style="margin-bottom: -10px; padding: 10px;">{{$error}}</div>
                </div>
            @endif
        </div>
    </div>
@endsection


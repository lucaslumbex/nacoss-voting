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
                    <th>Fullname</th>
                    <th>Matric No</th>
                    {{--<th>Name</th>--}}
                    <th>E-mail</th>
                    <th>Course</th>
                    {{--<th>Status</th>--}}
                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr class="odd gradeX"  >
                            <td>
                                <a href="/admin/{{$user->matric_no}}/user_profile" style="margin: 0; padding: 0">
                                    <img src="/prof_image/{{$user->picture_path}}" class="img.avatar img-circle" style="height: 30px; width: 30px; margin: -15px 0">
                                </a>
                            </td>
                            <td>{{'name'}}</td>
                            <td>{{$user->matric_no}}</td>
                            <td>{{$user->email}}</td>
{{--                            <td class="center">{{'address'}}</td>--}}
                            <td class="center">{{'computer science'}}</td>
                            {{--<td>--}}
                            {{--                    {{#if loggedIn}}--}}
                            {{--                    {{#if_eq loggedIn '1'}}--}}
                            <!--true-->
                                {{--<span class="label label-success">&nbsp; Active &nbsp;&nbsp;</span>--}}
                            {{--                    {{else}}--}}
                            <!--false-->
                                {{--<span class="label label-danger">Inactive</span>--}}
                                {{--{{/if_eq}}--}}
                                {{--{{/if}}--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                @endif
                {{--{{/each}}--}}
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


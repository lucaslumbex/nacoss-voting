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
                    <th>Category</th>
                    <th>Name</th>
                    <th>Course</th>
                    {{--<th>Campaign Pic</th>--}}
                    <th>Vote Count</th>
                </tr>
                </thead>
                <tbody>
                @if($candidates)
                    @foreach($candidates as $candidate)
                        <tr class="odd gradeX"  >
                            <td><img class="table_pic" src="/image/{{$candidate->cand_picture}}"></td>
                            <td>{{$candidate->category}}</td>
                            <td>{{$candidate->cand_name}}</td>
                            <td>{{$candidate->cand_course}}</td>
{{--                            <td>{{$candidate->cand_campaign_pic}}</td>--}}
                            <td><span class="label label-lime">&nbsp; {{$candidate->cand_vote_count}} &nbsp;</span></td>
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

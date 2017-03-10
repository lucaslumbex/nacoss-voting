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
                    <th>Category No</th>
                    <th>Max Number of Candidate</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td></td>
                            <td>{{$category->cat_name}}</td>
                            <td>{{$category->max_no_of_candidate}}</td>
                            <td></td>
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

@extends('layouts.admin_app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <div class="jumbotron">
                            <div class="col-md-4 col-md-offset-4 panel">
                                <h4>Admin Dashboard BABY</h4>
                                <div>
                                {{($current_user->email)}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

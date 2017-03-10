@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Error</div>

                <div class="panel-body">
                    @if($error)
                        <div class="text-center center-block">
                            <br>
                            <div class="col-xs-offset-3 col-xs-9 alert alert-danger" style="padding: 10px;">{{$error}}</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin_app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-gray" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="panel-heading">
                    <h2>Add New Category</h2>
                </div>
                <!--enctype="multipart/form-data"-->
                <form method="post" action="/admin/category" class="form-horizontal">
                    <div class="panel-body">
                        @if($success)
                            <div class="text-center center-block">
                                <br>
                                <div class="alert alert-success col-xs-offset-3 col-xs-9" style="padding: 10px;">{{$success}}</div>
                            </div>
                        @endif

                        @if($error)
                            <div class="text-center center-block">
                                <br>
                                <div class="col-xs-offset-3 col-xs-9 alert alert-danger" style="padding: 10px;">{{$error}}</div>
                            </div>
                        @endif
                            {{ csrf_field() }}

                        <div class="form-group mb-md{{ $errors->has('cat_name') ? ' has-error' : '' }}">
                            <label for="cat_name" class="col-xs-4 control-label">Category Name</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="cat_name" id="cat_name" value="{{ old('cat_name') }}" >
                                @if ($errors->has('cat_name'))
                                    <span class="help-block ">
                                        <span>{{ $errors->first('cat_name') }}</span>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group mb-md{{ $errors->has('max_no_of_candidate') ? ' has-error' : '' }}">
                            <label for="max_no_of_candidate" class="col-xs-4 control-label">Max No Of Candidate</label>
                            <div class="col-xs-7">
                                <input type="number" class="form-control" name="max_no_of_candidate" id="max_no_of_candidate"  value="{{ old('max_no_of_candidate') }}">
                                @if ($errors->has('max_no_of_candidate'))
                                    <span class="help-block" >
                                        <span>{{ $errors->first('max_no_of_candidate') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <input type="submit" class="btn btn-primary pull-right" name="" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin_app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-gray" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="panel-heading">
                    <h2>Add New Category</h2>
                </div>
                <!--enctype="multipart/form-data"-->
                <form method="post" action="/admin/student_info" class="form-horizontal">
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


                        <div class="form-group mb-md{{ $errors->has('matric_no') ? ' has-error' : '' }}">
                            <label for="matric_no" class="col-xs-4 control-label">Matric No</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="matric_no" id="matric_no" required value="{{ old('matric_no') }}">
                                @if ($errors->has('matric_no'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('matric_no') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-md{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-xs-4 control-label">Student Name</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="name" id="name" required value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('name') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-md{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-xs-4 control-label">Course</label>
                            <div class="col-xs-7">
                                {{--<input type="text" class="form-control" name="course" id="course" required>--}}
                                <select  name="course" id="course" class="form-control">
                                    <option value="" disabled>Choose your course</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="MIS">MIS</option>
                                </select>
                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('course') }}</span>
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

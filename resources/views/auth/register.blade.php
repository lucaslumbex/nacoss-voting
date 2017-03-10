@extends('layouts.users_app')

@section('content')
    <!-- Intro Section -->
    <section class="hero">
        <!-- Intro Scroll Down -->
        <div class="intro-scroll-down">
            <a class="scroll-down" href="#how">
            <span class="mouse">
                <span class="mouse-dot"></span>
            </span>
            </a>
        </div>
        <!-- End Intro Scroll Down -->
    </section>
    <div class="clearfix"></div>

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="overflow-x: hidden">
            <div class="panel panel-default" style="margin-top: 110px; margin-bottom: 20px;">
                {{--<div class="panel-heading">Register</div>--}}
                <div class="panel-body" style="padding: 60px 0px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{--'picture_path' => 'PATH'--}}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('matric_no') ? ' has-error' : '' }}">
                            <label for="matric_no" class="col-md-4 control-label">Matric_no</label>

                            <div class="col-md-6">
                                <input id="matric_no" type="text" class="form-control" name="matric_no" value="{{ old('matric_no') }}">
                                {{--<input type="radio" name="matric_no" value="male">--}}
                                {{--<input type="radio" name="matric_no" value="female">--}}

                                @if ($errors->has('matric_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matric_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-n">
                            <label for="picture_path" class="col-xs-4 control-label">Profile Picture</label>
                            <div class="col-xs-7">
                                <div class="fileinput fileinput-new" required style="width: 100%;" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                    <div>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="picture_path">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="padding: 10px">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

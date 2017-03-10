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

    <div class="animated fadeIn" style="overflow-x: hidden">
    <div class="row" style="overflow-x: hidden">
        <div class="col-md-8 col-md-offset-2" style="overflow-x: hidden">
            <div class="panel panel-default" style="margin-top: 110px">
                {{--<div class="panel-heading text-center">Login</div>--}}
                <div class="panel-body" style="padding: 60px 0px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="" style="padding: 5px;color: #333" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="padding: 10px">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}" style="padding: 10px">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.users_app')

@section('content')

    <!-- CONTENT --------------------------------------------------------------------------------->
    <section class="inner-intro Profile_sect overlay-light parallax parallax-background2" style="background-image: url('{{ asset('users/img/voteback.jpg') }}')">
        <div class="container">
            <div class="row title">
                <img src="/prof_image/{{ $current_user->picture_path }}">
                <h2 class="h2 orange-color">{{ $current_user->name }}</h2>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!-- Profile Section -->
    <section class="">
        <div class="container">
            <div class="row">

                <div class="animated fadeIn" style="overflow-x: hidden">
                    <div class="row" style="overflow-x: hidden">
                        <div class="col-md-8 col-md-offset-2" style="overflow-x: hidden">
                            <div class="panel panel-default" style="margin-top: 110px">
                                {{--<div class="panel-heading text-center">Login</div>--}}
                                <div class="panel-body" style="padding: 60px 0px;">
                                    <div class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Matric No :</label>

                                            <div class="col-md-6">
                                                {{--<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">--}}
                                                <label class="form-control" >{{$current_user->matric_no}}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email :</label>

                                            <div class="col-md-6">
                                                {{--<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">--}}
                                                <label class="form-control" >{{$current_user->email}}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Course :</label>

                                            <div class="col-md-6">
                                                {{--<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">--}}
                                                <label class="form-control" >{{$current_user->course}}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button class="btn btn-primary" style="padding: 7px">
                                                    <i class="fa fa-btn fa-edit"></i> Edit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Buy LIT -->
    <section id="testimonial" class="dark-bg ptb ptb-sm-80 bg-img9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-sm-30 text-center">
                    <!--<h1>start voting now!!!</h1>-->
                    <a href="{{url()->previous()}}" class="mt-25 btn btn-md btn-white-line">GO Back</a>
                    {{--<a href="" class="mt-25 btn btn-md btn-white-line">GO Back</a>--}}
                </div>
            </div>
        </div>
    </section>

@endsection

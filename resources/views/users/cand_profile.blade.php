@extends('layouts.users_app')

@section('content')

    <!-- CONTENT --------------------------------------------------------------------------------->
    <!--Intro Section -->
    {{--<section class="inner-intro bg-img7 overlay-light parallax parallax-background2" style="background-image: url('{{ asset('users/img/voteback.jpg') }}')">--}}
        {{--<div class="container">--}}
            {{--<div class="row title">--}}
                {{--<h2 class="h2 orange-color">Kelsi Monros's Profile</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!-- Profile Section -->
    <section class="ptb ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!--<h3>&nbsp;</h3>-->
                </div>

                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cand_prof center-block text-center">
                                <img src="/image/{{$candidate->cand_picture}}" alt="">

                                <h6 class="text-cap"><strong>{{$candidate->cand_name}}</strong></h6>
                                <p class="text-uppercase course">{{$candidate->cand_course}}</p>

                                <div class="">
                                    <a class="btn btn-success">Vote</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="cand_prof2 center-block">
                                <!--<img src="img/boy_face.gif" alt="">-->
                                <h4 class="text-cap text-left"><strong>Contending Post :</strong></h4>
                                <p class="text-uppercase">{{$candidate->category}}</p>

                                <h4 class="text-cap text-left"><strong>Memo :</strong></h4>
                                <p class="text-uppercase">
                                    {{$candidate->cand_campaign_memo}}
                                </p>

                                <h4 class="text-cap text-left"><strong>Campaign Picture :</strong></h4>
                                <img src="/image/{{$candidate->cand_campaign_pic}}" alt="">
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

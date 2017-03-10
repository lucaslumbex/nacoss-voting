@extends('layouts.users_app')

@section('content')

    <!-- CONTENT --------------------------------------------------------------------------------->
    <!-- Intro Section -->

    <section class="inner-intro bg-img7 overlay-light parallax parallax-background2" style="background-image: url('{{ asset('users/img/voteback.jpg') }}')">
        <div class="container">
            <div class="row title">
                <h2 class="h2 orange-color">Voting Results</h2>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!-- About Section -->
    <section class="ptb ptb-sm-20">
        <div class="container">
            <div class="row">
                @foreach($sort as $srt)
                    @foreach ($srt as $key => $value)
                        @if(!sizeof($value)==0)
                            <div class="col-md-12 text-center">
                                <h3 class="pre-h3">{{$key}}</h3>
                            </div>

                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    @foreach($value as $ky)
                                        <div class="col-md-4">
                                            <div class="cand_sec center-block text-center">
{{--                                                <img src="{{ asset('users/img/girl_face2.jpg') }}" alt="">--}}
                                                <img src="/image/{{$ky['details']->chosen_candidate_pic}}" alt="">

                                                <h4><strong>{{$ky['name']}}</strong></h4>
                                                {{--<p class="text-uppercase">{{'course'}}</p>--}}
                                                <p>For: {{$ky['details']->category}}</p>

                                                <div class="">
                                                    <span class="badge badge-success">{{$ky['count']}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<p></p>--}}
                                        {{--<p></p>--}}
{{--                                        <p>{{$ky['details']->chosen_candidate}}</p>--}}
                                        {{--<p>{{$ky['count']}}</p>--}}
                                    @endforeach
                                </div>
                            </div>
                        @else

                        @endif
                    @endforeach
                @endforeach
            </div>

            <div class="row">


            </div>
        </div>
    </section>

    <!-- Buy LIT -->
    <section id="testimonial" class="dark-bg ptb ptb-sm-80 bg-img9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-sm-30 text-center">
                    <!--<h1>start voting now!!!</h1>-->
                    <a href="#" class="mt-25 btn btn-md btn-white-line">About</a>
                </div>
            </div>
        </div>
    </section>


@endsection

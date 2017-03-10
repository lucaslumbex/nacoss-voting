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

        <!-- Hero Slider Section -->
        <div class="flexslider fullscreen-carousel hero-slider-1 parallax parallax-section1">
            <ul class="slides">
                <li class="bg-img">
                    <img src="img/square-black.png" alt="" class="swatch" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">&nbsp;Oni Dipo for President</h2>
                                <br />
                                <div><a href="#" class="btn btn-md btn-white-line" target="_blank">Vote Now</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="bg-img">
                    <img src="img/square-black.png" alt="" class="swatch" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">&nbsp;Andra Day For Sectary</h2>
                                <br />
                                <div><a href="store/index.html" class="btn btn-md btn-white-line">Vote</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--&lt;!&ndash;-->
                <li id="intro" class="bg-img">
                    <img src="img/square-black.png" alt="" class="swatch" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero light-color">
                            <div class="inner-caption">
                                <h2 class="h2">Anya Ivy for President</h2>
                                <br />
                                <div>
                                    <a href="#" class="btn btn-md btn-white">Vote Now</a>
                                    <span class="btn-space-10 xs-hidden"></span>
                                    <a href="#" class="btn btn-md btn-white-line xs-hidden">Watch Clips</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="bg-img1">
                    <img src="" alt="" class="swatch" />
                    <div class="overlay-hero overlay-dark">
                        <div class="container caption-hero dark-color">
                            <div class="inner-caption">
                                <h2 class="h2">Candice Dare For Treasurer</h2>
                                <br />
                                <div><a target="" href="#" class="btn btn-md btn-black">Check out Profile</a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Hero Slider Section -->
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->


    <!-- How it works Section -->
    <section id="how" class="wow fadeIn ptb ptb-sm-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="h4">How It Works</h3>
                    <div class="spacer-15"></div>
                    <p class="lead">Voting for your <b>nacos</b> officials has never been easier</p>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-12 mb-30">
                    <table class="shows-list" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Step One</th>
                            <th class="text-center">Step Two</th>
                            <th class="text-center">Step Three</th>
                            <th class="text-center">Step Four</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th><div class="spacer-15"></div></th>
                            <th><div class="spacer-15"></div></th>
                            <th><div class="spacer-15"></div></th>
                            <th><div class="spacer-15"></div></th>
                        </tr>
                        <tr>
                            <th class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</th>
                            <th class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</th>
                            <th class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</th>
                            <th class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</th>
                        </tr>
                        </tbody>
                    </table>

                    <div class="spacer-15"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it works Section -->

    <!-- Buy LIT -->
    <section id="testimonial" class="dark-bg ptb ptb-sm-80 bg-img9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-sm-30 text-center">
                    <h1>start voting now!!!</h1>
                    <a href="/users/vote_center" class="mt-25 btn btn-md btn-white-line">Vote now</a>
                </div>
            </div>
        </div>
    </section>
@endsection

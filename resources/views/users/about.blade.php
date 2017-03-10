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

        <!-- About Section -->
        <section class="ptb ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>About</h3>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nisi praesentium suscipit.
                            In odit, sequi. Deleniti, dignissimos est fuga, libero magni molestiae nemo non odit,
                            officiis omnis provident reiciendis rem.
                            <strong>
                                <em>
                                    <a href="#" target="_blank" rel="external">
                                        Lorem ipsum dolor sit amet.
                                    </a>
                                </em>
                            </strong>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nisi praesentium suscipit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nisi praesentium suscipit.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="clearfix"></div>
    <!-- End Intro Section -->

    <!-- Buy LIT -->
    <section id="testimonial" class="dark-bg ptb ptb-sm-80 bg-img9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-sm-30 text-center">
                    <h1>start voting now!!!</h1>
                    <a href="store/index.html" class="mt-25 btn btn-md btn-white-line">Vote now</a>
                </div>
            </div>
        </div>
    </section>
@endsection

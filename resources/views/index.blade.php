@extends('layouts.base')


@section('content')
    <section>
        <!-- START REVOLUTION SLIDER 5.0-->
        <div class="slider-1">
            <div class="rev_slider" id="js-slider" style="display:none;">
                @include('layouts.slider')
            </div>
        </div>
    </section>
    <div class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <div class="row">
                @include('layouts.analytics')
            </div>
        </div>
    </div>

    <section class="section why-choose-us-section-1  p-b-75 bg-cover js-waypoint"
        style="background: url(&quot;assets/images/why-choose-us-01.jpg&quot;) center center no-repeat;">
        <div class="container">
            <div class="row">
                @include('pages.whychooseus')
            </div>
        </div>
    </section>
    <section class="section bg-grey-light p-t-70 p-b-50">
        <div class="container">
            <div class="relative section-testimonials-wrapper-1">
                @include('testimonial.testi')
            </div>
        </div>
    </section>

    <div class="section bg-parallax p-t-100 p-b-70 bg-cover"
        style="background: url(&quot;assets/images/statistic-01.jpg&quot;) center center no-repeat;"
        data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
        @include('pages.parallax')
    </div>


    <div class="section bg-black p-t-80 p-b-80">
        @include('pages.email')
    </div>
    <section class="section bg-white p-t-60 p-b-50">
        <div class="container">
            <div class="relative">
                @include('pages.ourProject')
            </div>
        </div>
    </section>
    <div class="section bg-parallax p-t-120 p-b-120"
        style="background: url(&quot;assets/images/banner-01.jpg&quot;) no-repeat;" data-paroller-type="background"
        data-paroller-factor="-0.3" data-paroller-direction="vertical">
        @include('pages.bg-parallax')
    </div>
    <section class="section p-t-70 p-b-30 bg-white">
        <div class="container">
            <div class="relative">
                @include('pages.news')
            </div>
        </div>
    </section>
    {{-- <section class="section bg-grey-light p-t-70 p-b-70">
        <div class="container">
            <div class="relative">
                @include('pages.ourPartners')
            </div>
        </div>
    </section> --}}
@endsection

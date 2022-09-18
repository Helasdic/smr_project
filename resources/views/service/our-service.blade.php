@extends('layouts.base')

@section('content')
    <div class="heading-page heading-page-1 bg-cover"
        style="background: url(assets/images/heading-page-01.jpg) center center no-repeat;">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/services') }}">Services</a>
                </li>
            </ul>
            <h3 class="title">Services</h3>
        </div>
    </div>
    <!-- Heading page / end-->
    <!-- Image card / start-->
    <div class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="image-card image-card-1 dark">
                        <div class="image">
                            <a href="{{ url('/single-blog') }}">
                                <img src="assets/images/services-07.jpg" alt="Consumer Products Consulting" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="{{ url('/single-blog') }}">Consumer Products Consulting</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                                tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="{{ url('/single-blog') }}">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="image-card image-card-1 dark">
                        <div class="image">
                            <a href="{{ url('/single-blog') }}">
                                <img src="assets/images/services-08.jpg" alt="Financial Services Consulting" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="{{ url('/single-blog') }}">Financial Services Consulting</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                                tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="{{ url('/single-blog') }}">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="image-card image-card-1 dark">
                        <div class="image">
                            <a href="{{ url('/single-blog') }}">
                                <img src="assets/images/services-09.jpg" alt="Business Consulting" />
                            </a>
                        </div>
                        <h3 class="title">
                            <a href="{{ url('/single-blog') }}">Business Consulting</a>
                        </h3>
                        <div class="content">
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                                tortor tempor, quis porta tellus dictum.</p>
                        </div>
                        <div class="link">
                            <a href="{{ url('/single-blog') }}">
                                <i class="fa fa-caret-right"></i>
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Image card / end-->
    <!-- call to action / start-->
    <div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
        <div class="container">
            <div class="block-left">
                <p class="text-block text-med">Looking for a first-class financial advisor?</p>
            </div>
            <div class="block-right">
                <a class="au-btn au-btn-border au-btn-border-light" href="#">Get A Free Quote</a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.base')



@section('content')
    <div class="heading-page heading-page-1 bg-cover"
        style="background: url(assets/images/heading-page-04.jpg) center center no-repeat;">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/blog') }}">About Us</a>
                </li>
            </ul>
            <h3 class="title">About Us</h3>
        </div>
    </div>
    <!-- heading page / end-->
    <!-- section / start-->
    <section class="section p-t-70 p-b-30 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading-section heading-section-2 dark left">
                        <h3>WHO WE ARE</h3>
                    </div>
                    <p class="text-block p-r-10 m-b-20">
                        Founded 1998, Curabitur dictum viverra urna. Nam ullamcorper egestas lacinia. Fusce fermentum velit
                        non velit malesuada, vel aliquam leo viverra. Etiam id justo mattis, bibendum eros non, finibus
                        diam. Suspendisse suscipit, arcu ac rutrum pellentesque,
                        nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin rutrum convallis mauris.
                        Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam nunc in tristique.
                    </p>
                    <p class="text-block p-r-10">
                        Sed id fermentum lectus, vel sollicitudin ipsum. Nulla porttitor, dolor ut sagittis lacinia, nulla
                        mauris elementum leo, at viverra massa sapien id diam. Phasellus et ornare sem. Integer dictum
                        imperdiet luctus.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="plyr-video m-b-50">
                        <div class="js-video video" data-type="vimeo" data-video-id="176916362"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section / end-->
    <!-- section / start-->
    <div class="section bg-grey-light p-t-100 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="number-box dark">
                        <span class="number counterUp">325</span>
                        <span class="title">Cases completed</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box dark">
                        <span class="number counterUp">25</span>
                        <span class="title">Consultants</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box dark">
                        <span class="number counterUp">12</span>
                        <span class="title">Awards Winning</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="number-box dark">
                        <span class="number">
                            <span class="counterUp">100</span>
                            <span class="sub">%</span>
                        </span>
                        <span class="title">Satisfied customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section / end-->
    <!-- WHY CHOOSE US / start-->
    <section class="section bg-white p-t-70 p-b-20">
        <div class="container">
            <div class="heading-section heading-section-2 dark left">
                <h3>WHY CHOOSE US</h3>
            </div>
            <div class="p-b-10"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-briefcase" href="{{ url('/services') }}"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Business Consulting</a>
                            </h3>
                            <p>Nam eget justo risus. Morbi elit nulla, eleifend vitae justo et, laoreet tincidunt metus nec
                                urna scelerisque</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-money" href="{{ url('/services') }}"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Financial Consulting</a>
                            </h3>
                            <p>Fusce at accumsan justo. Nulla lacus efficitur vel aliquam sed iaculis ac sem sed,
                                ullamcorper aliquet lorem</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-calculator" href="{{ url('/services') }}"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Taxes Planning</a>
                            </h3>
                            <p>Fusce at accumsan justo. Nulla lacus efficitur vel aliquam sed imperdiet auctor nisi dictum
                                ornare risus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-umbrella" href="{{ url('/services') }}"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Insurance Consulting</a>
                            </h3>
                            <p>Donec malesuada urna porta tellus feugiat. Donec ultricies felis ipsum, at efficitur tellus
                                luctus eu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-user" href="{{ url('/services') }}"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Retirement Strategies</a>
                            </h3>
                            <p>Donec malesuada urna porta tellus feugiat, ac tempor tortor finibus lacus quam rutrum leo
                                consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon-box icon-box-5">
                        <div class="icon">
                            <a class="fa fa-bank" href="#"></a>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ url('/services') }}">Business Loan</a>
                            </h3>
                            <p>Donec malesuada urna porta tellus feugiat, ac tempor tortor ornare. At dui sit amet massa
                                ultricies ullamcorper</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US / end-->
    <!-- HOW WE WORK WITH YOUR / start-->
    <div class="section section-split bg-black">
        <div class="section-split-left bg-cover matchHeigh"
            style="background: url(&quot;assets/images/bg-contact-form-02.jpg&quot;) center center no-repeat;"></div>
        <div class="section-split-right matchHeigh">
            <div class="we-work-section">
                <div class="heading-section heading-section-1 light">
                    <h3>HOW WE WORK WITH YOUR</h3>
                </div>
                <div class="accordion-box accordion-box-1 accordion-box-2" data-accordion-group>
                    <div class="accordion open m-b-5" data-accordion>
                        <div class="accordion-title" data-control>
                            <p>01. Staffing Solution</p>
                        </div>
                        <div class="accordion-content animated" data-content>
                            <div class="content-inner">
                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare
                                    vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum
                                    urna at sapien varius elementum. Suspendisse
                                    ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu
                                    auctor magna pellentesque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion m-b-5" data-accordion>
                        <div class="accordion-title" data-control>
                            <p>02. Understand Your Business and Objectives</p>
                        </div>
                        <div class="accordion-content animated" data-content>
                            <div class="content-inner">
                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare
                                    vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum
                                    urna at sapien varius elementum. Suspendisse
                                    ut mi felis et interdum libero lacinia vel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion m-b-5" data-accordion>
                        <div class="accordion-title" data-control>
                            <p>03. Develop a Plan & Implementation</p>
                        </div>
                        <div class="accordion-content animated" data-content>
                            <div class="content-inner">
                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare
                                    vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum
                                    urna at sapien varius elementum. Suspendisse
                                    ut mi felis et interdum libero lacinia vel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion m-b-5" data-accordion>
                        <div class="accordion-title" data-control>
                            <p>04. Become a value added Partner</p>
                        </div>
                        <div class="accordion-content animated" data-content>
                            <div class="content-inner">
                                <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare
                                    vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum
                                    urna at sapien varius elementum. Suspendisse
                                    ut mi felis et interdum libero lacinia vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOW WE WORK WITH YOUR / end-->
    <!-- MEET OUR TEAM / start-->
    <section class="section p-t-70 p-b-35 bg-white">
        <div class="container">
            <div class="p-b-10">
                <div class="heading-section heading-section-2 dark">
                    <h3>MEET OUR TEAM</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-card image-card-6">
                        <div class="image">
                            <img src="assets/images/team-member-01.jpg" alt="Peter Hart" />
                        </div>
                        <h3 class="name">
                            <a href="about-teammember.html">Peter Hart</a>
                        </h3>
                        <div class="job-title">
                            <span>Chief Executive Officer</span>
                        </div>
                        <div class="content">
                            <p>Suspendisse venenatis ex nec aliquet semper. Pellentesque rutrum rutrum augue. Cras efficitur
                                accumsan vehicula. Quisque at dui lectus.</p>
                        </div>
                        <ul class="socials">
                            <li>
                                <a class="fa fa-facebook-square"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin-square"></a>
                            </li>
                        </ul>
                        <div class="phone">
                            <span>(+1) 96 800 888</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-card image-card-6">
                        <div class="image">
                            <img src="assets/images/team-member-02.jpg" alt="Rose Lewis" />
                        </div>
                        <h3 class="name">
                            <a href="about-teammember.html">Rose Lewis</a>
                        </h3>
                        <div class="job-title">
                            <span>Chief Marketing Officer</span>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet ante nec ex
                                pellentesque tristique sit amet non nulla</p>
                        </div>
                        <ul class="socials">
                            <li>
                                <a class="fa fa-facebook-square"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin-square"></a>
                            </li>
                        </ul>
                        <div class="phone">
                            <span>(+1) 96 800 568</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-card image-card-6">
                        <div class="image">
                            <img src="assets/images/team-member-03.jpg" alt="Kevin Gardner" />
                        </div>
                        <h3 class="name">
                            <a href="about-teammember.html">Kevin Gardner</a>
                        </h3>
                        <div class="job-title">
                            <span>Chief Financial Officer</span>
                        </div>
                        <div class="content">
                            <p>Duis pharetra lectus quis odio commodo molestie. Proin ullamcorper semper aliquam. Proin
                                eleifend nunc quis facilisis egestas nec tristique</p>
                        </div>
                        <ul class="socials">
                            <li>
                                <a class="fa fa-facebook-square"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin-square"></a>
                            </li>
                        </ul>
                        <div class="phone">
                            <span>(+1) 96 800 179</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MEET OUR TEAM / end-->
    <!-- TESTIMONIALS / start-->
    <section class="section bg-parallax bg-cover p-t-70 p-b-60"
        style="background: url(&quot;images/bg-testimonials-01.jpg&quot;) center center no-repeat;"
        data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
        <div class="bg-overlay dark"></div>
        <div class="container">
            <div class="relative">
                <div class="heading-section heading-section-2 light bar-white">
                    <h3>TESTIMONIALS</h3>
                </div>
                <div class="owl-carousel dark nav-style-2 p-t-30" data-carousel-margin="30" data-carousel-nav="true"
                    data-carousel-loop="true" data-carousel-items="1" data-carousel-sm="1" data-carousel-xs="1"
                    data-carousel-lg="1" data-carousel-md="1" data-carousel-autoplay="true">
                    <div class="image-card image-card-5 light center">
                        <div class="card-body">
                            <p class="content">We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien
                                augue, dictum et gravida et, viverra et est. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Fusce congue ut nulla vitae rutrum. Ut molestie
                                cursus placerat. Aenean posuere consequat arcu.</p>
                        </div>
                        <div class="card-bot">
                            <div class="avatar">
                                <a href="#">
                                    <img src="assets/images/avatar-01.jpg" alt="Ann Gilbert" />
                                </a>
                            </div>
                            <div class="info">
                                <span class="name">Ann Gilbert</span>
                                <span class="job-title">Chief Executive Officer, Envato</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-card image-card-5 light center">
                        <div class="card-body">
                            <p class="content">Quisque at dapibus turpis, in maximus nulla. Curabitur sagittis, leo in
                                rhoncus placerat, dolor enim pretium massa, vitae suscipit purus. We are lorem ipsum dolor
                                sit amet, consectetur adipiscing elit. Proin sapien augue, dictum
                                et gravida et, viverra et est.</p>
                        </div>
                        <div class="card-bot">
                            <div class="avatar">
                                <a href="#">
                                    <img src="assets/images/avatar-02.jpg" alt="Kevin Cater" />
                                </a>
                            </div>
                            <div class="info">
                                <span class="name">Kevin Cater</span>
                                <span class="job-title">Chief Marketing Officer, Envato</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-card image-card-5 light center">
                        <div class="card-body">
                            <p class="content">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed
                                ornare ligula eget tortor tempor, quis porta tellus dictum. We are lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Proin sapien augue, dictum
                                et gravida et, viverra et est.</p>
                        </div>
                        <div class="card-bot">
                            <div class="avatar">
                                <a href="#">
                                    <img src="assets/images/avatar-03.jpg" alt="Jacob Graham" />
                                </a>
                            </div>
                            <div class="info">
                                <span class="name">Jacob Graham</span>
                                <span class="job-title">Chief Executive Officer, Envato</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS / end-->
    <!-- OUR PARTNER / start-->
    <section class="section bg-grey-light p-t-70 p-b-70">
        <div class="container">
            <div class="relative">
                <div class="p-b-15">
                    <div class="heading-section heading-section-2 dark">
                        <h3>OUR PARTNER</h3>
                    </div>
                </div>
                <div class="owl-carousel dark nav-style-2" data-carousel-margin="30" data-carousel-nav="true"
                    data-carousel-loop="true" data-carousel-items="5" data-carousel-autoplay="true">
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-01.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-02.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-03.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-04.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-05.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-06.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-07.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                    <div class="icon-box icon-box-3">
                        <div class="icon">
                            <a href="about-partnerships.html">
                                <img src="assets/images/partner-08.png" alt="our partner" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PARTNER / end-->
    <!-- callt to action / start-->
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

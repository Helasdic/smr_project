@extends('layouts.base')



@section('content')
    <div class="heading-page heading-page-1 bg-cover"
        style="background: url(assets/images/heading-page-05.jpg) center center no-repeat;">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
            <h3 class="title">Contact Us</h3>
        </div>
    </div>
    <section class="section bg-white p-t-70 p-b-40">
        <div class="container">
            <h3 class="text-block text-black text-bold text-med m-b-40">Send Us a Message</h3>
            <div class="messages" id="status"></div>
            <form method="post" action="includes/contact-form.php" name="contact" id="contact-form" role="form"
                data-toggle="validator">
                <div class="au-form-group">
                    <div class="au-form-col-4 form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="text" placeholder="Your Name" id="name"
                            name="name" required data-error="Name is required.">
                    </div>
                    <div class="au-form-col-4 form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="email" placeholder="Your Email" id="email"
                            name="email" required data-error="Valid email is required.">
                    </div>
                    <div class="au-form-col-4 form-group">
                        <div class="help-block with-errors"></div>
                        <input class="au-input au-input-2" type="tel" placeholder="Phone Number" id="phone"
                            name="phone" required data-error="Valid Phone is required.">
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="help-block with-errors"></div>
                    <textarea class="au-textarea" placeholder="Your Messages" style="height: 170px;" id="msg" name="msg" required
                        data-error="Please, leave us a message."></textarea>
                </div>
                <input class="au-btn au-btn-primary" type="submit" id="contactBtn" value="Submit">
            </form>
        </div>
    </section>
    <!-- section contact form / end-->
    <!-- section contact map / start-->
    <section class="section bg-white p-t-40 contact-map-section-1">
        <div class="container">
            <h3 class="heading-section text-black text-bold text-med m-b-40">Our Offices</h3>
        </div>
        <div class="controls-map">
            <div class="container">
                <div id="controls-tabs"></div>
            </div>
            <div class="google-map" id="google_map" style="width: 100%; height: 668px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.8387339686293!2d106.93921417929232!3d-6.3396441757901645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993f99e707af1%3A0x84322aa5a9363cb7!2sKopi%20Paci!5e0!3m2!1sen!2sid!4v1663407301032!5m2!1sen!2sid"
                    width="2500" height="668" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

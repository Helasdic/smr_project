@if (Request::is('/'))
    <header>
        <!-- header / start-->
        <div class="hidden-tablet-landscape-up">
            <div class="header header-mobile-1">
                @include('layouts.navigation.hidden-tablet-landscape-up')
            </div>
        </div>
        <div class="hidden-tablet-landscape">
            @include('layouts.navigation.hidden-tablet-landscape')
        </div>
        <div class="section section-navbar-1 bg-grey hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="block-left">
                    <div class="logo-mobile">
                        <a href="index.html">
                            <img src="assets/images/Paten1 (2).png" alt="Consulting">
                        </a>
                    </div>
                    <nav>
                        <div class="au-navbar navbar-1">
                            <ul class="au-navbar-menu">
                                <li class="drop">
                                    <a href="#">Home</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="index.html">Home Page v1</a>
                                        </li>
                                        <li>
                                            <a href="index1.html">Home Page v2</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">Home Page v3</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">Home Page v4</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">Home Page v5</a>
                                        </li>
                                        <li>
                                            <a href="index5.html">Home Page v6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-v3.html">Who we are</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Services</a>
                                    <ul class="drop-menu bottom-right">
                                        <li class="drop">
                                            <a href="#">Services List</a>
                                            <ul class="drop-menu top-right">
                                                <li>
                                                    <a href="services-v1.html">Services List v1</a>
                                                </li>
                                                <li>
                                                    <a href="services-v2.html">Services List v2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop">
                                            <a href="#">Services Details</a>
                                            <ul class="drop-menu top-right">
                                                <li>
                                                    <a href="service-v1.html">Services Details v1</a>
                                                </li>
                                                <li>
                                                    <a href="service-v2.html">Services Details v2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="testinmonials.html">Testinmonials</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Projects</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="portfolios.html">Projects List</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single.html">Projects Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <a href="#">News</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="blogs.html">News List</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Pages</a>
                                    <ul class="drop-menu bottom-left">
                                        <li>
                                            <a href="about-v1.html">About Page v1</a>
                                        </li>
                                        <li>
                                            <a href="about-v2.html">About Page v2</a>
                                        </li>
                                        <li>
                                            <a href="about-v3.html">About Page v3</a>
                                        </li>
                                        <li>
                                            <a href="about-history.html">About History</a>
                                        </li>
                                        <li>
                                            <a href="about-partnerships.html">About Partnerships</a>
                                        </li>
                                        <li>
                                            <a href="about-leadership.html">About Leadership</a>
                                        </li>
                                        <li>
                                            <a href="about-teammember.html">About Teammember</a>
                                        </li>
                                        <li>
                                            <a href="about-careers.html">About Careers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="block-right">
                    <div class="search-widget search-widget-1">
                        <div class="icon-search">
                            <i class="icon_search"></i>
                        </div>
                        <input class="animated" type="text" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
        <!-- header / end-->
    </header>
@else
    <header>
        <!-- Header / start-->
        <div class="hidden-tablet-landscape">
            <div class="topbar topbar-2 bg-black">
                <div class="container">
                    <div class="contact-widget contact-widget-2">
                        <div class="block-left">
                            <div class="icon-box icon-box-4">
                                <span class="icon icon_phone"></span>
                                <span>021-29462443</span>
                            </div>
                            <div class="icon-box icon-box-4">
                                <span class="icon icon_pin"></span>
                                <span>Jl. A.Yani No.2, 1st floor, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141</span>
                            </div>
                            {{-- <div class="icon-box icon-box-4">
                                <span class="icon icon_clock"></span>
                                <span>09:30 am – 06:00 pm</span>
                            </div> --}}
                        </div>
                        <div class="block-right">
                            <ul class="horizontal-list">
                                <li class="social-item-1">
                                    <a class="fa fa-facebook"></a>
                                </li>
                                <li class="social-item-1">
                                    <a class="fa fa-twitter"></a>
                                </li>
                                <li class="social-item-1">
                                    <a class="fa fa-google-plus"></a>
                                </li>
                                <li class="social-item-1">
                                    <a class="fa fa-linkedin"></a>
                                </li>
                                <li class="social-item-1">
                                    <a class="fa fa-instagram"></a>
                                </li>
                            </ul>
                            <a class="hidden-tablet-landscape au-btn au-btn-primary m-l-20 hidden-desktop-med"
                                href="#">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-navbar-1 section-navbar-2 bg-white hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="block-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/icons/ic-logo-01.png" alt="Consulting">
                        </a>
                    </div>
                </div>
                <div class="block-right">
                    <nav>
                        <div class="au-navbar navbar-1 navbar-2">
                            <ul class="au-navbar-menu">
                                <li class="drop">
                                    <a href="#">Home</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="index.html">Home Page v1</a>
                                        </li>
                                        <li>
                                            <a href="index1.html">Home Page v2</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">Home Page v3</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">Home Page v4</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">Home Page v5</a>
                                        </li>
                                        <li>
                                            <a href="index5.html">Home Page v6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-v3.html">Who we are</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Services</a>
                                    <ul class="drop-menu bottom-right">
                                        <li class="drop">
                                            <a href="#">Services List</a>
                                            <ul class="drop-menu top-right">
                                                <li>
                                                    <a href="services-v1.html">Services List v1</a>
                                                </li>
                                                <li>
                                                    <a href="services-v2.html">Services List v2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop">
                                            <a href="#">Services Details</a>
                                            <ul class="drop-menu top-right">
                                                <li>
                                                    <a href="service-v1.html">Services Details v1</a>
                                                </li>
                                                <li>
                                                    <a href="service-v2.html">Services Details v2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="testinmonials.html">Testinmonials</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Projects</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="portfolios.html">Projects List</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single.html">Projects Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <a href="#">News</a>
                                    <ul class="drop-menu bottom-right">
                                        <li>
                                            <a href="blogs.html">News List</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li class="drop">
                                    <a href="#">Pages</a>
                                    <ul class="drop-menu bottom-left">
                                        <li>
                                            <a href="about-v1.html">About Page v1</a>
                                        </li>
                                        <li>
                                            <a href="about-v2.html">About Page v2</a>
                                        </li>
                                        <li>
                                            <a href="about-v3.html">About Page v3</a>
                                        </li>
                                        <li>
                                            <a href="about-history.html">About History</a>
                                        </li>
                                        <li>
                                            <a href="about-partnerships.html">About Partnerships</a>
                                        </li>
                                        <li>
                                            <a href="about-leadership.html">About Leadership</a>
                                        </li>
                                        <li>
                                            <a href="about-teammember.html">About Teammember</a>
                                        </li>
                                        <li>
                                            <a href="about-careers.html">About Careers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape-up">
            <div class="header header-mobile-1">
                <div class="top-header">
                    <div class="container-fluid">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/icons/ic-logo-01.png" alt="Consulting" />
                            </a>
                        </div>
                        <div class="search-widget search-widget-1">
                            <div class="icon-search">
                                <i class="icon_search"></i>
                            </div>
                            <input class="animated" type="text" placeholder="Search" />
                        </div>
                        <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="au-navbar-mobile navbar-mobile-1">
                    <ul class="au-navbar-menu">
                        <li class="drop">
                            <a href="#">Home</a>
                            <span class="arrow">
                                <i></i>
                            </span>
                            <ul class="drop-menu bottom-right">
                                <li>
                                    <a href="index.html">Home Page v1</a>
                                </li>
                                <li>
                                    <a href="index1.html">Home Page v2</a>
                                </li>
                                <li>
                                    <a href="index2.html">Home Page v3</a>
                                </li>
                                <li>
                                    <a href="index3.html">Home Page v4</a>
                                </li>
                                <li>
                                    <a href="index4.html">Home Page v5</a>
                                </li>
                                <li>
                                    <a href="index5.html">Home Page v6</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-v3.html">Who we are</a>
                        </li>
                        <li class="drop">
                            <a href="#">Services</a>
                            <span class="arrow">
                                <i></i>
                            </span>
                            <ul class="drop-menu bottom-right">
                                <li class="drop">
                                    <a href="#">Services List</a>
                                    <ul class="drop-menu top-right">
                                        <li>
                                            <a href="services-v1.html">Services List v1</a>
                                        </li>
                                        <li>
                                            <a href="services-v2.html">Services List v2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <a href="#">Services Details</a>
                                    <ul class="drop-menu top-right">
                                        <li>
                                            <a href="service-v1.html">Services Details v1</a>
                                        </li>
                                        <li>
                                            <a href="service-v2.html">Services Details v2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="testinmonials.html">Testinmonials</a>
                        </li>
                        <li class="drop">
                            <a href="#">Projects</a>
                            <span class="arrow">
                                <i></i>
                            </span>
                            <ul class="drop-menu bottom-right">
                                <li>
                                    <a href="portfolios.html">Projects List</a>
                                </li>
                                <li>
                                    <a href="portfolio-single.html">Projects Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="drop">
                            <a href="#">News</a>
                            <span class="arrow">
                                <i></i>
                            </span>
                            <ul class="drop-menu bottom-right">
                                <li>
                                    <a href="blogs.html">News List</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">News Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li class="drop">
                            <a href="#">Pages</a>
                            <span class="arrow">
                                <i></i>
                            </span>
                            <ul class="drop-menu bottom-right">
                                <li>
                                    <a href="about-v1.html">About Page v1</a>
                                </li>
                                <li>
                                    <a href="about-v2.html">About Page v2</a>
                                </li>
                                <li>
                                    <a href="about-v3.html">About Page v3</a>
                                </li>
                                <li>
                                    <a href="about-history.html">About History</a>
                                </li>
                                <li>
                                    <a href="about-partnerships.html">About Partnerships</a>
                                </li>
                                <li>
                                    <a href="about-leadership.html">About Leadership</a>
                                </li>
                                <li>
                                    <a href="about-teammember.html">About Teammember</a>
                                </li>
                                <li>
                                    <a href="about-careers.html">About Careers</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid">
                    <div class="contact-widget contact-widget-1">
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_phone"></i>
                            </div>
                            <div class="content">
                                <p>1-800-123-6889</p>
                                <p>contact@site.com</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_pin"></i>
                            </div>
                            <div class="content">
                                <p>8th floor, 379 Hudson St</p>
                                <p>New York, NY 10018</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-1">
                            <div class="icon">
                                <i class="icon_clock"></i>
                            </div>
                            <div class="content">
                                <p>09:30 am – 06:00 pm</p>
                                <p>Every Day</p>
                            </div>
                        </div>
                        <a class="hidden-tablet-landscape au-btn au-btn-primary" href="#">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header / End-->
    </header>
@endif

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
                    <a href="{{ url('/') }}">
                        <img src="assets/images/Paten1 (2).png" alt="Consulting">
                    </a>
                </div>
                <nav>
                    <div class="au-navbar navbar-1">
                        <ul class="au-navbar-menu">
                            <li class="drop">
                                <a href="{{ url('/konsultan-pajak') }}">Home</a>
                                {{-- <ul class="drop-menu bottom-right">
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
                                </ul> --}}
                            </li>
                            <li>
                                <a href="{{ url('/konsultan-pajak') }}">Who we are</a>
                            </li>
                            <li class="drop">
                                <a href="/">Services</a>
                                <ul class="drop-menu bottom-right">
                                    <li class="drop">
                                        <a href="/">Services List</a>
                                        <ul class="drop-menu top-right">
                                            <li>
                                                <a href="/">Services List v1</a>
                                            </li>
                                            <li>
                                                <a href="/">Services List v2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop">
                                        <a href="/">Services Details</a>
                                        <ul class="drop-menu top-right">
                                            <li>
                                                <a href="/">Services Details v1</a>
                                            </li>
                                            <li>
                                                <a href="/">Services Details v2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/">Testinmonials</a>
                            </li>
                            <li class="drop">
                                <a href="/">Projects</a>
                                <ul class="drop-menu bottom-right">
                                    <li>
                                        <a href="/">Projects List</a>
                                    </li>
                                    <li>
                                        <a href="/">Projects Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop">
                                <a href="/">News</a>
                                <ul class="drop-menu bottom-right">
                                    <li>
                                        <a href="/">News List</a>
                                    </li>
                                    <li>
                                        <a href="/">News Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Contact Us</a>
                            </li>
                            <li class="drop">
                                <a href="/">Pages</a>
                                <ul class="drop-menu bottom-left">
                                    <li>
                                        <a href="/">About Page v1</a>
                                    </li>
                                    <li>
                                        <a href="/">About Page v2</a>
                                    </li>
                                    <li>
                                        <a href="/">About Page v3</a>
                                    </li>
                                    <li>
                                        <a href="/">About History</a>
                                    </li>
                                    <li>
                                        <a href="/">About Partnerships</a>
                                    </li>
                                    <li>
                                        <a href="/">About Leadership</a>
                                    </li>
                                    <li>
                                        <a href="/">About Teammember</a>
                                    </li>
                                    <li>
                                        <a href="/">About Careers</a>
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

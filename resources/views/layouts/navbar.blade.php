<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light px-5 p-3  bg-green mt-n1 active-nav ms-n1 shadow">
        <button class="menu btn border-0" id="menu-btn"
            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
            aria-label="Main Menu">
            <svg width="50" height="30" viewBox="0 0 100 100">
                <path class="line line1"
                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3"
                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
        </button>
        <div class="container-fluid justify-content-end ">
            <div class="dropdown">
                @if (Auth::user()->avatar != null)
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img
                            src="{{ asset('/assets/images/why-choose-us-01.jpg') }}" alt="" width="32"
                            height="32" class="rounded-circle me-2"> <strong
                            class="phone-style">{{ Auth::user()->name }}</strong>
                    </a>
                @else
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img
                            src="{{ asset('/assets/images/why-choose-us-01.jpg') }}" alt="admin" width="32"
                            height="32" class="rounded-circle me-2"> <strong
                            class="phone-style">{{ Auth::user()->name }}</strong>
                    </a>
                @endif
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow  m-phone dropdown-phone"
                    aria-labelledby="dropdownUser1">
                    {{-- <li><a class="dropdown-item"
                            href="{{ route('admin-AnbQR.change-password.index', Auth::user()->name) }}">Change
                            Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li> --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" style="cursor:pointer">Sign Out</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Top Nav -->
    {{-- card --}}
    <div class="col-md-5 text-start">
        @if (session('status'))
            <div class="alert alert-danger alert-dismissible show fade" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert"></button>
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    {{-- end card --}}
</div>

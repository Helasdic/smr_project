<div class="side-navbar active-nav d-flex bg-green justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100 font-sidebar">
        <a href="#" class="nav-link text-white p-2">
            <img src="/assets/images/PATEN.png" style="width: 100%">
        </a>
        <hr>
        <li class="nav-item"> <a href="{{ route('dashboard') }}"
                class="nav-link {{ request()->is('konsultan-pajak/admin/dashboard*') ? 'actived' : '' }} text-white"
                aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Dashboard</span> </a> </li>
        </li>
        {{-- <li class="nav-item"> <a href="" class="nav-link mt-3 text-white" aria-current="page"> <i
                    class="fa fa-book"></i><span class="ms-2">Daftarr Klien</span> </a> </li>
        </li> --}}

        {{-- create dropdown submenu  --}}
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-book"></i><span class="ms-2">Klien</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('klient-dashboard') }}">Daftar Klien</a></li>
                <li><a class="dropdown-item" href="#">Klien</a></li>
                <li><a class="dropdown-item" href="#">Klien</a></li>
            </ul>
        </li>
        {{-- end create dropdown submenu  --}}


</div>

<!-- Main Wrapper -->


<!-- bootstrap js -->

<!-- custom js -->
<script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
    });
</script>

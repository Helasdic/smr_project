<div class="side-navbar active-nav d-flex bg-green justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100 font-sidebar">
        <a href="{{ route('admin-AnbQR.index') }}" class="nav-link text-white p-2">
            <img src="/assets/img/logo-admin.png" style="width: 100%">
        </a>
        <hr>
        <li class="nav-item"> <a href="{{ route('admin-AnbQR.index') }}"
                class="nav-link {{ request()->routeIs('admin-AnbQR.index') ? 'actived' : '' }} text-white"
                aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a> </li>
        <li> <a href="{{ route('admin-AnbQR.users.index') }}"
                class="nav-link text-white {{ request()->is('admin-AnbQR/users*') ? 'actived' : '' }}"> <i
                    class="fa fa-user-circle"></i><span class="ms-2">Manage User</span> </a> </li>
        <li> <a href="{{ route('admin-AnbQR.product.index') }}"
                class="nav-link text-white {{ request()->is('admin-AnbQR/product*') ? 'actived' : '' }}"> <i
                    class="fa fa-shopping-cart"></i><span class="ms-2">Product</span> </a> </li>
        <li> <a href="{{ route('admin-AnbQR.category.index') }}"
                class="nav-link text-white {{ request()->is('admin-AnbQR/category*') ? 'actived' : '' }}"> <i
                    class="fa fa-list-alt" aria-hidden="true"></i><span class="ms-2">Category</span> </a>
        </li>
        <li> <a href="{{ route('admin-AnbQR.news.index') }}"
                class="nav-link text-white {{ request()->is('admin-AnbQR/news*') ? 'actived' : '' }}"> <i
                    class="fa fa-newspaper" aria-hidden="true"></i><span class="ms-2">News</span></a>
        </li>
        <li> <a href="{{ route('admin-AnbQR.faq.index') }}"
                class="nav-link text-white {{ request()->is('admin-AnbQR/faq*') ? 'actived' : '' }}"> <i
                    class="fa fa-question-circle" aria-hidden="true"></i><span class="ms-2">Faq</span></a>
        </li>
    </ul>
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

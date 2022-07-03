<nav class="sb-topnav navbar navbar-expand sticky-top navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="{{ route('manage.dashboard') }}">{{ $site_title ?? 'Eco' }}</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars text-light"></i></button>

    <ul class="navbar-nav ms-auto ms-md-0 ms-5 me-lg-4 ps-3">
        <li>
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-eye me-2"></i>View Site
            </a>
        </li>
    </ul>

    <!-- Navbar Search-->
    <form action="{{ route('manage.search') }}" method="post" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        @csrf
        <div class="input-group">
            <input class="form-control" name="search" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary text-light" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>

    <!-- Navbar-->
    <ul class="navbar-nav  ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('manage.profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('manage.password') }}">Change Password</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
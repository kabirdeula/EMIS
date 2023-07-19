{{-- Topbar --}}
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    {{-- Sidebar Toggle(Topbar) --}}
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <span><i class="la la-bars"></i></span>
    </button>

    {{-- Topbar Navbar --}}
    <ul class="navbar-nav ms-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        {{-- Nav Item - User Information --}}
        <li class="nav-item dropdown">
            <a href="#" id="navbarDropdown" class="nav-link" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <i class="las la-angle-down"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}" class="dropdown-item"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    {{-- End Topbar Navbar --}}
</nav>

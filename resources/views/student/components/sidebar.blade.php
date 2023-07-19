{{-- Sidebar --}}
<ul class="navbar-nav navbar-expand bg-primary bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar brand --}}
    <a href="{{ route('student.home') }}" class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo-no-background.svg') }}" class="img-fluid" width="32">
        </div>
        <div class="sidebar-brand-text mx-3">UniLink</div>
    </a>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item">
        <a href="{{ route('student.home') }}" class="nav-link text-dark">
            <span>
                <i class="las la-tachometer-alt fs-5 text-dark"></i>
                Dashboard
            </span>
        </a>
    </li>

    {{-- Nav Item - Assignments --}}
    {{-- <li class="nav-item">
        <a href="{{ route('student.assignments') }}" class="nav-link">
            <span>Assignments</span>
        </a>
    </li> --}}

    {{-- Sidebar Toggler (Sidebar) --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle">
            <i class="las la-angle-left"></i>
        </button>
    </div>
</ul>
{{-- End of Sidebar --}}

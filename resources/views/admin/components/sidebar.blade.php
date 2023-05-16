{{-- Sidebar --}}
<ul class="navbar-nav bg-dark bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar brand --}}
    <a href="{{ route('admin.home') }}" class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('images/logo-no-background.svg') }}" class="img-fluid" width="32">
        </div>
        <div class="sidebar-brand-text mx-3">UniLink</div>
    </a>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item">
        <a href="{{ route('admin.home') }}" class="nav-link">
            <span>Dashboard</span>
        </a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Heading --}}
    {{-- <div class="sidebar-heading">
        Interface
    </div> --}}

    {{-- Nav Item - Pages Collapse Menu --}}
    {{-- <li class="nav-item">
        <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span>Components</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collpase-header">Custom Components:</h6>
                <a href="#" class="collapse-item">Buttons</a>
                <a href="#" class="collapse-item">Cards</a>
            </div>
        </div>
    </li> --}}

    {{-- Nav Item - Students --}}
    <li class="nav-item">
        <a href="{{ route('users.show') }}" class="nav-link">
            <span>Users</span>
        </a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler (Sidebar) --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
{{-- End of Sidebar --}}
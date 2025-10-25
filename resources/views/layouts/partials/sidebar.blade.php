{{-- Sidebar --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Brand Sidebar (Link ke Dashboard) --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIM_KAP</div>
    </a>
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item {{ Request::is('/') || Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}"> {{-- Ganti ke route name --}}
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading"> Menu Utama </div>

    {{-- Nav Item - Mata Kuliah --}}
    <li class="nav-item {{ Request::is('mata-kuliah*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('mata-kuliah') }}"> {{-- Ganti ke route name --}}
            <i class="fas fa-fw fa-book"></i>
            <span>Mata Kuliah</span>
        </a>
    </li>

    {{-- Nav Item - Riwayat Semester --}}
    <li class="nav-item {{ Request::is('riwayat*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('riwayat') }}"> {{-- Ganti ke route name --}}
            <i class="fas fa-fw fa-history"></i>
            <span>Riwayat Semester</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
{{-- End of Sidebar --}}
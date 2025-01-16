<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Bidan Hopipah</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('data-rekam-medis.index') }}">Rekam Medis</a>
                            {{-- {{ route('rekam-medis.index') }} --}}
                    </li>
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('data-bidans.index') }}">Data Bidan</a>
                            {{--  --}}
                    </li>
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{route('data-users.index')}}">Data Admin</a>
                            {{-- {{ route('users.index') }} --}}
                    </li>
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('data-bidan-schedules.index') }}">Jadwal Bidan</a>
                            {{-- {{ route('bidan-schedules.index') }} --}}
                    </li>
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('data-patients.index') }}">Data Pasien</a>
                            {{-- {{ route('patients.index') }} --}}
                    </li>
                </ul>
            </li>

    </aside>
</div>

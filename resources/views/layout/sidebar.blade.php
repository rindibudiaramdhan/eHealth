@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-text mx-3">eHealth</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $sidebar === 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @if ($user->role == 'admin')

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <li class="nav-item {{ $sidebar === 'patient' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('patient') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pasien</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @endif

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>

            <li class="nav-item {{ $sidebar === 'registration' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('registration') }}">
                    <i class="fas fa-fw fa-file-signature"></i>
                    <span>Pendaftaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Utilitas
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->
@endsection

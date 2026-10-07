<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #e0f2fe;">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('beranda') }}">TransLive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active fw-bold' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rute.index') ? 'active fw-bold' : '' }}" href="{{ route('rute.index') }}">Daftar Rute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tracking') ? 'active fw-bold' : '' }}" href="{{ route('tracking') }}">Live Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tiket.index') ? 'active fw-bold' : '' }}" href="{{ route('tiket.index') }}">Tiket Saya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
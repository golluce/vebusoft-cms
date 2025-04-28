<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <a href="{{ route('monopanel.dashboard') }}" class="navbar-brand">
                <span class="logo-lg text-white">MonoPanel</span>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-sm btn-danger">Çıkış</button>
            </form>
        </div>
    </div>
</header>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Halaman</div>

                <a class="nav-link fs-5" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    Dashboard
                </a>
                @if (auth()->check() && auth()->user()->id_role == 2)
                <a class="nav-link fs-5" href="{{ route('user') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    User
                </a>
                @endif

                <a class="nav-link fs-5" href="{{ route('kategori') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                    Kategori
                </a>

                <a class="nav-link fs-5" href="{{ route('barang') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-table-list"></i></div>
                    Barang
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->username }}
        </div>
    </nav>
</div>

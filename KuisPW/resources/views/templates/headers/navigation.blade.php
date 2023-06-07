<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" arialabel="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">KUIS</a>
        <button class="navbar-toggler p-0 border-0" type="button"
        id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse"
            id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                    href="{{ url('/home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                    href="{{ url('/data') }}">Data Mahasiswa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                    href="{{ url('/profile') }}">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
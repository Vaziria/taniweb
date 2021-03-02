<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <button id="navbarDropdown" class="btn nav-link dropdown-toggle tx-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            <i class="fas fa-bars tx-20 d-md-none"></i>
        </button>

        <div class="dropdown-menu dropdown-menu-right bd-1  bd-gray-200 rounded-5" aria-labelledby="navbarDropdown">
            <div class="wd-300 dropdown-item p-3 bd-b bd-gray-200 d-flex">
                <div class="d-flex">
                    <img src="https://www.agromaret.com/cache/img/crop/photo-profiles/photo_profile.jpg" class="wd-50 rounded-circle mr-3">
                    <div>
                        <h5 class="tx-bold mt-3">{{ Auth::user()->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="dropdown-item p-3 bd-b bd-gray-200 d-flex">
                <span>Akun Saya</span> <i class="fas fa-arrow-right mg-l-auto mt-1"></i>
            </div>
            <div class="dropdown-item p-3 bd-b bd-gray-200 d-flex">
                <span>Pesanan Saya</span> <i class="fas fa-arrow-right mg-l-auto mt-1"></i>
            </div>
            <a class="dropdown-item p-3" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> keluar
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
<div>
    <a href="{{ route('dashboard.wishlist') }}" class="btn rounded-5 mt-1 px-2">
        <i class="fas fa-heart icon-bar"></i>
    </a>
</div>


<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <button id="notification" class="btn px-2 dropdown-toggle rounded-5 mt-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fas fa-bell icon-bar"></i>
        </button>

        <div class="dropdown-menu dropdown-menu-right bd-1 wd-300 bd-gray-200 rounded-5" aria-labelledby="notification">
            @for($i = 1; $i <= 5; $i++)
                <a href="{{ route('dashboard.notification-detail', ['id' => 'test']) }}" class="dropdown-item p-3 bd-b tx-dark d-block" style="white-space: normal;">
                    <h6 class="tx-bold tx-dark">Update System Website 3 Maret 2021</h6>
                    <p class="tx-12 tx-gray-600 mb-0">Mohon maaf atas ketidaknyamanannya, kami akan segera kembali.</p>
                    <small class="tx-gray-600 tx-bold">2 maret 2021</small>
                </a>
            @endfor
            <a href="{{ route('dashboard.notification') }}" class="dropdown-item p-3 tx-dark d-block">
                <h6 class="tx-bold tx-dark tx-center mb-0">Lihat Semua Notifikasi</h6>
            </a>
        </div>
    </li>
</ul>

<ul class="navbar-nav ml-auto mr-4">
    <li class="nav-item dropdown">
        <button id="user" class="btn px-2 dropdown-toggle rounded-5 mt-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="far fa-user icon-bar"></i>
        </button>

        <div class="dropdown-menu dropdown-menu-right bd-1  bd-gray-200 rounded-5" aria-labelledby="user">
            <div class="wd-300 p-3 bd-b bd-gray-200 d-flex">
                <div class="d-flex">
                    <img src="{{ config('user.default_image') }}" class="wd-50 rounded-circle mr-3">
                    <div>
                        <h5 class="tx-bold mt-3">{{ Auth::user()->name }}</h5>
                    </div>
                </div>
            </div>
            <a href="{{ route('dashboard.account') }}" class="dropdown-item p-3 bd-b bd-gray-200 d-flex">
                <span>Akun Saya</span> <i class="fas fa-arrow-right mg-l-auto mt-1"></i>
            </a>
            <a href="{{ route('dashboard.orders') }}" class="dropdown-item p-3 bd-b bd-gray-200 d-flex">
                <span>Pesanan Saya</span> <i class="fas fa-arrow-right mg-l-auto mt-1"></i>
            </a>
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

<div>
    <a href="{{ route('dashboard.cart') }}" class="btn btn-info tx-12 rounded-5 d-flex py-2">
        <div class="pos-relative mr-2">
            <div class="pos-absolute b-15 l-10">
                <span class="badge badge-danger badge-pill">99+</span>
            </div>
            <i class="fad fa-bags-shopping tx-30"></i>
        </div>
        <span class="mt-2 tx-bold">Keranjang</span>
    </a>
</div>

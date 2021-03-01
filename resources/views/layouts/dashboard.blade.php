<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
@include('layouts.scripts')
<body>
    <div id="app">
        <div class="pos-fixed t-0 ht-70 z-index-200 bd-b bd-gray-200 bg-white shadow-sm wd-100p">
            <div class="container d-flex mg-t-5">
                <div>
                    <a class="az-logo tx-info tx-26" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                </div>
                <div class="wd-100p mx-2 mx-md-5">
                    <div class="input-group mg-t-1">
                        <input class="form-control rounded-5 bd-info tx-13" placeholder="Cari di {{ config('app.name', 'Laravel') }}...">
                        <span class="input-group-append bd-info input-group-text bg-info tx-white"><i class="fas fa-search"></i></span>
                    </div>
                    <div class="d-none d-md-flex tx-12 mg-t-3">
                        <a href="#" class="mr-3 tx-dark">Beras</a>
                        <a href="#" class="mr-3 tx-dark">Kemiri</a>
                        <a href="#" class="mr-3 tx-dark">Kelapa Sawit</a>
                        <a href="#" class="mr-3 tx-dark">Telur Ayam</a>
                        <a href="#" class="mr-3 tx-dark">Ikan Lele</a>
                        <a href="#" class="mr-3 tx-dark">Sidat</a>
                        <a href="#" class="mr-3 tx-dark">Batu Bara</a>
                        <a href="#" class="mr-3 tx-dark">Semua Komoditi</a>
                    </div>
                </div>
                <div class="d-flex">

                    @guest
                        <!-- @if (Route::has('register'))
                            <a class="btn btn-outline-info mr-1 rounded-5" href="{{ route('register') }}">Daftar</a>
                        @endif -->
                        @if (Route::has('login'))
                            <div>
                                <a class="btn btn-info rounded-5 no-wrap" href="{{ route('login') }}">
                                    <span class="d-none d-md-inline">Masuk </span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </div>
                        @endif
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="btn nav-link dropdown-toggle tx-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                                    <i class="fas fa-bars tx-20 d-md-none"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right bd-1 rounded-5" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> keluar
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </div>

        <main class="mg-t-50 py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    
</body>
</html>

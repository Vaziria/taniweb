<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(isset($title)) {{ $title }} | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/azia.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel-custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
        #user.dropdown-toggle::after, #notification.dropdown-toggle::after {
            display: none;
        }
        .btn-menu-user:hover {
            background: #f4f5f8 !important;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div id="app">
        <div class="pos-fixed t-0 ht-60 z-index-200 bd-b bd-gray-200 bg-white shadow-sm wd-100p">
            <div class="container d-flex mg-t-5">
                <div>
                    <a class="az-logo tx-info tx-26 mt-1" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                </div>

                <div class="mg-l-auto d-flex">
                    @include('layouts.user.action')
                </div>
            </div>
        </div>

        <main class="mg-t-40 py-3">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-3">
                        @include('layouts.user.sidebar')
                    </div>
                    <div class="col-md-9 product-action py-4 rounded-10">
                        @yield('content')
                    </div>
                </div>
            </div>
           
        </main>
    </div>
    @include('layouts.footer')
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous">
</script>
@stack('scripts')

</html>

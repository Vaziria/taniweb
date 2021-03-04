@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row mt-4 mb-5">
        <div class="col-md-4 overflow-hidden">
            <div id="image-sidebar">
                <img src="{{ $active_image }}" class="img-fluid rounded-10 mb-3">
                <div id="product-image-slider" class="d-flex overflow-hidden mb-4">
                    @for($i = 1; $i <= 4; $i++)
                        @if($product['image_'.$i] ?? null)
                            <img src="{{ $product['image_'.$i] }}" class="img-fluid rounded-10 bd">
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $product->cat_id }}</a></li>
                    <li class="breadcrumb-item tx-info wd-70p"><span class="ellipsis">{{ $product->name }}</span></li>
                </ol>
            </nav>

            <h4 class="tx-bold">{{ $product->name }}</h4>
            <div class="d-flex mb-4 tx-gray-700">
                <span class="mr-3"><i class="fad fa-eye"></i> 321</span>.
                <span class="mx-3"><i class="fad fa-shopping-bag"></i> 321</span>.
                <span class="ml-3"><i class="fad fa-comment-dots"></i> 321</span>
            </div>

            <span class="tx-bold tx-info d-block mb-1"><i class="fas fa-tags"></i> {{ $product->cat_id }}</span>

            <div class="tx-18">
                <span class="tx-gray-600"><del>Rp 70.000</del></span>
                <span class="badge product-discount tx-12">Disc 20%</span>
            </div>
            <h3 class="tx-bold tx-orange mb-4">Rp {{ number_format($product->price) }} <small class="tx-gray-600 tx-16">/ pack</small></h3>

            <h5 class="tx-bold mb-3">Informasi Produk</h5>
            <div class="d-flex mb-2">
                <span class="wd-100p">Stok Tersisa</span>
                <span class="wd-100p tx-right">{{ $product->stock }}</span>
            </div>
            <div class="d-flex mb-4">
                <span class="wd-100p">Keterangan</span>
                <span class="wd-100p tx-right">25kg/pack</span>
            </div>

            <h5 class="tx-bold mb-3">Deskripsi Produk</h5>
            <div class="mb-4"></div>
            <pre class="tx-12 tx-md-14 mb-4">{{ $product->description }}</pre>

            <div class="mb-3 d-flex bg-gray-100 bd bd-gray-200 p-3 rounded-5">
                <img src="{{ config('user.default_image') }}" class="wd-50 rounded-circle mr-3">
                <div>
                    <p class="tx-bold mb-0">{{ $product->seller->seller_name }}</p>
                    <span class="tx-gray-600"><i class="fas fa-map-marker-alt"></i> {{ $product->seller->city }}</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div id="product-action">
                <div class="rounded-10 product-action">
                    <div class="card bd-0 rounded-10">
                        <div class="card-body">
                            <div class="d-flex">
                                <h5 class="tx-bold product-title">{{ $product->name }}</h5>
                                <button class="btn"><i class="fas fa-heart tx-20 tx-gray-400 mt-1"></i></button>
                            </div>
                            <hr>
                            <h5 class="tx-bold mb-4">Ringkasan Belanja</h5>
                            <div class="d-flex">
                                <span>Subtotal</span>
                                <h5 class="tx-bold tx-orange mg-l-auto">Rp 90.000</h5>
                            </div>
                            <div class="input-group">
                                <button class="input-group-prepend input-group-text tx-bold tx-20">-</button>
                                <input type="number" class="form-control" value="1">
                                <button class="input-group-append input-group-text tx-bold tx-20">+</button>
                            </div>
                            <small class="tx-gray-600">miminal pembelian 1 pack</small>
                            <div class="d-flex mt-3">
                                <div class="btn btn-outline-orange tx-bold rounded-5 mg-l-auto mr-2">+ keranjang</div>
                                <form action="{{ route('dashboard.checkout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-orange tx-bold rounded-5">Beli</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <h4 class="tx-bold mb-4"><i class="fad fa-anchor tx-info"></i> Produk Terkait</h4>
    <div class="mb-2">
        @include('components.products.slider-card', ['id' => 'terkait', 'products' => $product_terkait])
    </div>
</div>

@push('styles')
    <style scoped type="text/css">
        #product-image-slider .owl-nav .owl-prev {
            top: 40px;
            left: 0px;
        }
        #product-image-slider .owl-nav .owl-next {
            top: 40px;
            right: 0px;
        }
        pre {
            white-space: pre-wrap;
            font-family: Roboto;
            line-height: 1.6;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/sticky-sidebar.min.js" integrity="sha512-iVhJqV0j477IrAkkzsn/tVJWXYsEqAj4PSS7AG+z1F7eD6uLKQxYBg09x13viaJ1Z5yYhlpyx0zLAUUErdHM6A==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){

            //  image slider
            const slider = $('#product-image-slider'),
            config = {
                nav: true,
                loop:false,
                dots: false,
                pagination: false,
                margin: 5,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 4
                    }
                }
            };

            slider.each(function () {
                $(this).owlCarousel(config);
            });

            // sticky sidebar

            new StickySidebar('#image-sidebar', {topSpacing: 90})
            new StickySidebar('#product-action', {topSpacing: 90})

        });
    </script>
@endpush
@endsection

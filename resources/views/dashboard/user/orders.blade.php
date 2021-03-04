@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold"><i class="fad fa-box-full tx-info"></i> Pesanan Saya</h4>
	<p class="mb-5 tx-gray-600">Lihat semua barang dan pantau status pemesanan Anda.</p>


	<nav class="navbar navbar-expand-lg navbar-light mb-5 tx-13 d-flex">
	    <ul id="status-order-slider" class="navbar-nav no-wrap bd-b wd-100p overflow-hidden">
	      	<li class="nav-item active">
	      	  	<a class="nav-link" href="#">Semua <span class="sr-only">(current)</span></a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link" href="#">Menunggu Konfirmasi</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link" href="#">Diproses</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link disabled" href="#">Dikirim</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link disabled" href="#">Pesanan Sampai</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link disabled" href="#">Pesanan Dibatalkan</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link disabled" href="#">Pesanan Dikembalikan</a>
	      	</li>
	      	<li class="nav-item">
	      	  	<a class="nav-link disabled" href="#">Pesanan Bermasalah</a>
	      	</li>
	    </ul>
	    <ul class="navbar-nav no-wrap wd-400 ml-3">
	      	<li class="nav-item mr-3">
	      	  	<div class="btn btn-outline-info tx-bold rounded-5"><i class="fas fa-sliders-h mr-2"></i> Filter</div>
	      	</li>
	      	<select class="form-control rounded-5 tx-bold">
	      		<option>Terbaru</option>
	      		<option>Terlama</option>
	      		<option>A - Z</option>
	      		<option>Z - A</option>
	      	</select>
	    </ul>
	</nav>

	<!-- if empty -->
	<div class="d-none tx-center mg-b-100">
		<i class="fad fa-box-open fa-4x tx-info d-block mb-2"></i>
		<h5 class="tx-bold">Pesanan Anda kosong</h5>
		<p class="tx-gray-500">Pesan sesuatu sekarang juga</p>
	</div>

	@for($i = 1; $i <= 5; $i++)
		<div class="bg-light bd bd-gray-100 rounded-5 product-action mb-3">
			<a href="{{ route('dashboard.order-detail', ['id' => 'test']) }}" class="tx-dark p-3 d-block">
				<div class="d-flex">

					<div>
						<img src="{{ $sample_product->image_1 }}" class="wd-50 rounded-5">
					</div>
					<div class="wd-250 mx-4">
						<h6 class="ellipsis tx-bold mb-0">
							{{ $sample_product->name }}
						</h6>
						<small class="tx-bold d-block">2 x</small>
						<small>dan 4 barang lainnya.</small>
					</div>

					<div class="mr-4 tx-12 no-wrap">
						<label class="tx-gray-600">Dibuat Pada</label>
						<h6 class="tx-bold tx-13">{{ $sample_product->created_at }}</h6>
						<label class="tx-gray-600">Status</label>
						<h6 class="tx-bold tx-13"><i class="fas fa-circle tx-primary"></i> Dikirim</h6>
					</div>

					<div class="mr-4 no-wrap">
						<label class="tx-gray-600 tx-12 d-block">Penjual</label>
						<div class="d-flex">
							<img src="{{ config('user.default_image') }}" class="wd-30 rounded-circle mr-3">
							<h6 class="tx-bold tx-13 mt-2">{{ $sample_product->seller->seller_name }}</h6>
						</div>
					</div>

					<div class="ml-4 no-wrap">
						<label class="tx-gray-600 tx-12 d-block">Total</label>
						<h5 class="tx-orange tx-bold">Rp 145.312</h5>
					</div>
				</div>
			</a>
		</div>
	@endfor

	<ul class="pagination pagination-info justify-content-center">
      	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
      	<li class="page-item active"><a class="page-link" href="#">1</a></li>
      	<li class="page-item"><a class="page-link" href="#">2</a></li>
      	<li class="page-item"><a class="page-link" href="#">3</a></li>
      	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
    </ul>

@push('styles')
	<style type="text/css" scoped>
		a:hover {
			color:#031b4e;
		}
		.page-item {
			margin: 0 10px;
		}
		.page-item a {
			border-radius: 5px !important;
		}
		#status-order-slider .owl-nav .owl-prev {
            top: 0px;
            left: 0px;
        }
        #status-order-slider .owl-nav .owl-next {
            top: 0px;
            right: 0px;
        }
		li.nav-item.active a {
		  border-bottom: 3px solid var(--mainColor);
		}
	</style>
@endpush
@push('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function($){

            //  image slider
            const slider = $('#status-order-slider'),
            config = {
                nav: true,
                loop:false,
                dots: false,
                pagination: false,
                margin: 5,
                autoWidth: true,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
            };

            slider.each(function () {
                $(this).owlCarousel(config);
            });

        });
    </script>
@endpush
@endsection

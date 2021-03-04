@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold"><i class="fad fa-receipt tx-info"></i> Tagihan Saya</h4>
	<p class="mb-5 tx-gray-600">Selalu bayar tagihan Anda tepat waktu.</p>

	<!-- if empty -->
	<div class="d-none tx-center mg-b-100">
		<i class="fad fa-ballot fa-4x tx-info d-block mb-2"></i>
		<h5 class="tx-bold">Tagihan Anda kosong</h5>
		<p class="tx-gray-500">Pesan sesuatu sekarang juga</p>
	</div>

	@for($i = 1; $i <= 5; $i++)
		<div class="bg-light bd bd-gray-100 rounded-5 product-action mb-3">
			<a class="tx-dark p-3 d-block">
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
					</div>

					<div class="mg-l-auto mr-4 no-wrap">
						<label class="tx-gray-600 tx-12 d-block">Total Tagihan</label>
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
@endsection

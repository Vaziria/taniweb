@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold mb-5"><i class="fad fa-box-full tx-info"></i> Detail Tagihan</h4>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
		<div>
			<label class="tx-gray-600">Dibuat Pada</label>
			<h6 class="tx-bold">{{ $sample_product->created_at }}</h6>
		</div>
		<div class="mg-l-auto d-flex">
			<img src="{{ config('user.default_image') }}" class="wd-50 rounded-circle mr-3">
			<div>
				<p class="tx-bold mb-0">{{ $sample_product->seller->seller_name }}</p>
				<span class="tx-gray-600"><i class="fas fa-map-marker-alt"></i> {{ $sample_product->seller->city }}</span>
			</div>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
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
		<div class="mg-l-auto mr-4 no-wrap">
			<label class="tx-gray-600 tx-12 d-block">Total Tagihan</label>
			<h5 class="tx-orange tx-bold">Rp 145.312</h5>
		</div>
		<div>
			<a href="{{ route('dashboard.order-detail', ['id' => 'test']) }}" class="btn btn-sm btn-primary rounded-5 mt-2 tx-bold">
				Lihat Detail Order
			</a>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action">
		<div class="bg-info bd shadow wd-350 tx-white p-4 rounded-10 mg-x-auto">
			<i class="fad fa-money-check fa-3x"></i>
			<div class="d-flex mt-2">
				<h3 class="wd-20p tx-bold tx-">0987</h3>
				<h3 class="wd-30p tx-bold tx-center">1923</h3>
				<h3 class="wd-30p tx-bold tx-center">3334</h3>
				<h3 class="wd-20p tx-bold tx-right">0093</h3>
			</div>
			<div>
				<small>Atas Nama</small>
				<h6 class="tx-bold">Mahfud Marmut</h6>
			</div>
		</div>
		<button class="btn btn-primary rounded-5 mt-3 tx-bold d-block mg-x-auto">
			Bayar Sekarang
		</button>
	</div>
@endsection

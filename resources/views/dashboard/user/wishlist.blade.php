@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold"><i class="fad fa-box-heart tx-info"></i> Wishlist</h4>
	<p class="mb-5 tx-gray-600">Wujudkan wishlist menjadi milik Anda.</p>

	 <div class="d-none tx-center mg-b-100">
	 	<div class="tx-info d-block mb-2">
	 		<i class="fad fa-heart tx-20"></i>
	 		<i class="fad fa-box-open fa-4x d-block"></i>
	 	</div>
        <h5 class="tx-bold">Wishlist Anda kosong</h5>
        <p class="tx-gray-500">Tambah wishlist sekarang juga</p>
    </div>

	<div class="row mb-3">
	    @foreach ($wishlists as $product)
	        <div class="col-6 col-md-4 col-lg-3 mb-3">
	            @include('components.products.card', ['product' => $product, 'wishlist' => true])
	        </div>
	    @endforeach
	</div>
@endsection

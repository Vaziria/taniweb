@extends('layouts.dashboard')

@section('content')
<div class="container py-5">
    <div class="row">
    	<div class="col-md-3 product-action rounded-10 py-4">
    		<div class="d-flex">
    			<img src="{{ config('user.default_image') }}" class="wd-100 rounded-circle mb-3">
    			<div class="ml-4 wd-100p mg-t-30">
    				<button class="btn btn-block btn-info rounded-5 tx-bold"><i class="fas fa-user-plus"></i> Follow</button>
    			</div>
    		</div>
    		<h5 class="tx-bold mb-0"><i class="fas fa-store-alt"></i> {{ $seller->seller_name }}</h5>
    		<small class="tx-bold">340 produk</small>
    		<p class="mt-3 mb-1 tx-gray-600"><i class="fas fa-map-marker-alt"></i> {{ $seller->city }}</p>
    		<p class="mb-1 tx-gray-600"><i class="fas fa-calendar-day"></i> Bergabung {{ $seller->created_at->translatedFormat('F Y') }}</p>
    		<p class="mb-1 tx-gray-600"><i class="fas fa-users-medical"></i> 192 Followers</p>
    		
    	</div>
    	<div class="col-md-9">
    		@foreach($seller_products as $index => $product)
    			<div class="mb-4">
    				{{  $index }},
    				{{ $product }}
    			</div>
    		@endforeach
    	</div>
    </div>
</div>
@endsection

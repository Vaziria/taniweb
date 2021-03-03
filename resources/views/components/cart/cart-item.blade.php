<div class="product-action mb-3 p-3 rounded-10">
	<div class="mb-3 d-flex">
		@if(!isset($checkout))
			<label class="ckbox mt-3 mr-3">
        		<input type="checkbox"><span></span>
        	</label>
        @endif
		<img src="https://www.agromaret.com/cache/img/crop/photo-profiles/photo_profile.jpg" class="wd-50 rounded-circle mr-3">
		<div>
			<p class="tx-bold mb-0">{{ $cart[0]->seller->seller_name }}</p>
			<span class="tx-gray-600"><i class="fas fa-map-marker-alt"></i> {{ $cart[0]->seller->city }}</span>
		</div>
	</div>

	@foreach($cart as $product)
		<div class="mb-2 p-2">
			<div class="d-flex">
				@if(!isset($checkout))
					<label class="ckbox mt-3 mr-3">
		        		<input type="checkbox"><span></span>
		        	</label>
		        @endif
		        
		        <a href="{{ route('dashboard.product-single', ['id' => $product->id]) }}">
					<img src="{{ $product->image_1 }}" class="wd-100 rounded-5 mr-3">
				</a>

				<div class="pt-2 ellipsis mr-3">
					<h6 class="tx-bold ellipsis">
						<a class="tx-dark" href="{{ route('dashboard.product-single', ['id' => $product->id]) }}">
							{{ $product->name }}
						</a>
					</h6>
					<div>
						<del class="tx-13 tx-gray-400">Rp {{ number_format($product->price + 10000) }}</del>
						<span class="badge product-discount">Disc 20%</span>
					</div>
					<span>
						<b class="tx-orange">Rp {{ number_format($product->price) }}</b> 
						<small class="tx-gray-600">/ pack</small></span>
				</div>
				<div class="mg-l-auto">
					<button class="btn pd-x-8 pd-y-5 mg-l-auto d-block">
						<i class="far fa-heart tx-20 tx-gray-400 mt-1"></i>
					</button>
					@if(!isset($checkout))
						<div class="mt-3 d-flex">
							<div class="btn-cart tx-gray-600 mr-3 rounded-5"><i class="fas fa-trash"></i></div>
							<div class="btn-cart btn-info rounded-5 tx-bold">-</div>
							<input type="number" class="form-control tx-center mg-t-1 ht-30 wd-50 mx-2 rounded-5" value="1">
							<div class="btn-cart btn-info rounded-5 tx-bold">+</div>
						</div>
					@else
						<h6 class="mt-3 tx-bold">1 x</h6>
					@endif
				</div>
			</div>
		</div>
	@endforeach
</div>

@push('styles')
	<style type="text/css" scoped>
		.btn-cart {
			width: 30px;
			text-align: center;
			cursor: pointer;
			padding: 5px 10px;
		}
	</style>
@endpush
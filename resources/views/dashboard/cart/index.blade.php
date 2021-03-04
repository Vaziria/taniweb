@extends('layouts.dashboard')

@section('content')
	
	@if($carts->count() > 0)
		@include('components.cart.bill-detail', ['carts' => $carts->first()])
	@endif

	<div class="container py-5">
		<h3 class="tx-bold mb-5"><i class="fad fa-bags-shopping tx-info"></i> Keranjang</h3>
		<div class="row">
			<div class="col-8">
				<div class="mb-5">
					@each('components.cart.cart-item', $carts, 'cart', 'components.cart.cart-empty')
				</div>

				<h4 class="tx-bold mb-4"><i class="fad fa-clipboard-check tx-info"></i> Rekomendasi</h4>
				<div class="row mb-3">
				    @foreach ($recomendations as $product)
				        <div class="col-6 col-md-4 col-lg-3 mb-3">
				            @include('components.products.card', ['product' => $product])
				        </div>
				    @endforeach
				</div>

			</div>
			<div class="col-4">
				<div id="cart-sidebar">
					<div class="product-action rounded-10">
						<form class="card card-body rounded-10 bd-0" method="POST" action="{{ route('dashboard.checkout') }}">
							@csrf
							<h5 class="tx-bold mb-4">Ringkasan Belanja</h5>
							<h6 class="tx-15 d-flex">
								<span><i class="fad fa-shopping-basket tx-gray-600"></i> 3 produk</span>
								<a class="mg-l-auto tx-12 mt-1" data-toggle="modal" data-target="#billInfo"><i class="fas fa-info-circle"></i> lihat selengkapnya</a>
							</h6>

							@include('components.cart.bill-info')
							

							<button class="btn btn-info btn-block rounded-5 tx-bold mt-3">Checkout</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/sticky-sidebar.min.js" integrity="sha512-iVhJqV0j477IrAkkzsn/tVJWXYsEqAj4PSS7AG+z1F7eD6uLKQxYBg09x13viaJ1Z5yYhlpyx0zLAUUErdHM6A==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        new StickySidebar('#cart-sidebar', {topSpacing: 90})
    </script>
@endpush
@endsection

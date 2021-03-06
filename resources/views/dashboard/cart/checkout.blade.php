@extends('layouts.dashboard')

@section('content')

	@include('components.voucher.select')
	@include('components.cart.bill-detail', ['carts' => $products])

	<div class="container py-5">
		<h3 class="tx-bold mb-5"><i class="fad fa-cart-arrow-down tx-info"></i> Checkout</h3>
		<div class="row">

			<div class="col-8">
				<div class="bg-gray-100 p-3 mb-3 rounded-5 bd bd-gray-200 d-flex">
					<i class="fas fa-map-marker-alt fa-2x tx-gray-600 mt-2"></i>
					<div class="tx-12 mx-3">
						<h6 class="tx-bold">Alamat</h6>
						<b>Pembeli (+628572312312)</b>
						<p class="mb-0 tx-gray-600">312321, Kel. Ciderum, Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730</p>
					</div>
					<div class="mg-l-auto mt-2">
						<button class="btn btn-primary tx-bold rounded-5 no-wrap">
							Pilih Alamat
						</button>
					</div>
				</div>
				@include('components.cart.cart-item', ['cart' => $products, 'checkout' => true])
			</div>

			<div class="col-4">
				<div id="checkout-sidebar">
					<div class="product-action rounded-10">
						<div class="card card-body rounded-10 bd-0">
							<h5 class="tx-bold mb-4">Ringkasan Belanja</h5>
							<h6 class="tx-15 d-flex mb-3">
								<span><i class="fad fa-shopping-basket tx-gray-600"></i> 3 produk</span>
								<a class="mg-l-auto tx-12 mt-1" data-toggle="modal" data-target="#billInfo"><i class="fas fa-info-circle"></i> lihat selengkapnya</a>
							</h6>

							<div class="btn bd rounded-5 mb-3 d-flex" data-toggle="modal" data-target="#voucher-select">
							    <i class="fad fa-ticket-alt mt-1 fa-2x tx-gray-700"></i>
							    <div class="tx-left ml-3">
							        <b class="d-block">Gunakan Voucher</b>
							        <small class="tx-gray-600">Pakailah voucer yang Anda miliki untuk mendapatkan potongan.</small>
							    </div>
							</div>

							<p class="bd-b bd-gray-200 d-flex py-2 mb-0">
								<span class="tx-gray-600">Total Harga</span>
								<b class="mg-l-auto">Rp 100.000</b>
							</p>
							<p class="bd-b bd-gray-200 d-flex py-2 mb-0">
								<span class="tx-gray-600">Ongkir</span>
								<b class="mg-l-auto">Rp 10.000</b>
							</p>
							<p class="bd-b bd-gray-200 d-flex py-2 mb-0">
								<span class="tx-gray-600">Diskon</span>
								<b class="mg-l-auto">Rp 1.000</b>
							</p>
							<p class="tx-bold d-flex py-2 mb-4">
								<span>Total Bayar</span>
								<b class="mg-l-auto">Rp 111.000</b>
							</p>

							<h5 class="tx-bold mb-3">Pembayaran</h5>
							<select class="form-control rounded-5 mb-4">
								<option>Pilih Metode Pembayaran</option>
							</select>

							<button class="btn btn-info btn-block rounded-5 tx-bold mt-3">Bayar</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/sticky-sidebar.min.js" integrity="sha512-iVhJqV0j477IrAkkzsn/tVJWXYsEqAj4PSS7AG+z1F7eD6uLKQxYBg09x13viaJ1Z5yYhlpyx0zLAUUErdHM6A==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        new StickySidebar('#checkout-sidebar', {topSpacing: 90})
    </script>
@endpush
@endsection
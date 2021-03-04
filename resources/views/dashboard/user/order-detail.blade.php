@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold mb-5"><i class="fad fa-box-full tx-info"></i> Detail Pesanan</h4>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
		<div>
			<label class="tx-gray-600">Dibuat Pada</label>
			<h6 class="tx-bold">{{ $sample_product->created_at }}</h6>
		</div>
		<div class="mg-l-auto tx-right">
			<label class="tx-gray-600">Status</label>
			<h6 class="tx-bold"><i class="fas fa-circle tx-primary"></i> Dikirim</h6>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
		<i class="fas fa-map-marker-alt fa-2x tx-gray-600 mt-2"></i>
		<div class="tx-12 mx-3">
			<h6 class="tx-bold">Alamat</h6>
			<b>Pembeli (+628572312312)</b>
			<p class="mb-0 tx-gray-600">312321, Kel. Ciderum, Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730</p>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
		<i class="fad tx-gray-700 fa-ticket-alt fa-3x mr-3"></i>
		<div>
			<h6 class="tx-bold mt-1 mb-0">Tidak ada voucer yang digunakan</h6>
			<p class="mb-0 tx-gray-600">tidak ada potongan harga voucer</p>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action d-flex">
		<i class="fad fa-money-check fa-3x mr-3"></i>
		<div>
			<h6 class="tx-bold mt-1 mb-0">Metode Pembayaran: Bank Transfer</h6>
			<span class="badge badge-danger">Belum Bayar</span>
		</div>
	</div>

	<div class="bg-light p-3 mb-3 rounded-5 product-action">
		<div class="mb-3 d-flex">
			<img src="{{ config('user.default_image') }}" class="wd-50 rounded-circle mr-3">
			<div>
				<p class="tx-bold mb-0">{{ $sample_cart[0]->seller->seller_name }}</p>
				<span class="tx-gray-600"><i class="fas fa-map-marker-alt"></i> {{ $sample_cart[0]->seller->city }}</span>
			</div>
		</div>

		<div class="table-responsive bd pt-2 rounded-5">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th class="tx-right">Total</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($sample_cart as $product)
	                <tr class="tx-gray-600">
	                  	<td>
	                  		<div class="d-flex">
		                  		<img src="{{ $product->image_1 }}" class="wd-40 rounded-5 mr-2">
		                  		<div class="ellipsis wd-300">
			                  		{{ $product->name }}
			                	</div>
			                </div>
	                  	</td>
	                  	<td>Rp {{ number_format($product->price) }}</td>
	                  	<td>3 pack</td>
	                  	<td class="tx-right">Rp {{ number_format($product->price * 3) }}</td>
	                </tr>
                @endforeach
                <tr class="tx-dark tx-bold">
	              	<td colspan="3">
	              		Total Harga
	              	</td>
	              	<td class="tx-right">Rp {{ number_format($product->price * 3) }}</td>
	            </tr>
              </tbody>
            </table>
          </div>
		@include('components.cart.bill-info', ['no_voucher' => true])
	</div>
@endsection

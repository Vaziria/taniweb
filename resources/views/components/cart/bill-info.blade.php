<hr>

<p class="mb-2 d-flex tx-gray-600">Total Harga <span class="mg-l-auto">Rp 100.000</span></p>
<p class="mb-2 d-flex tx-gray-600">Ongkir <span class="mg-l-auto">Rp 10.000</span></p>
<p class="mb-2 d-flex tx-gray-600">Diskon <span class="mg-l-auto">Rp 1.000</span></p>

<hr>

@if(!isset($no_voucher))
	<div class="btn bd rounded-5 mb-3 d-flex" data-toggle="modal" data-target="#voucher-select">
	    <i class="fad tx-gray-700 fa-ticket-alt mt-1 fa-2x"></i>
	    <div class="tx-left ml-3">
	        <b class="d-block">Gunakan Voucher</b>
	        <small class="tx-gray-600">Pakailah voucer yang Anda miliki untuk mendapatkan potongan.</small>
	    </div>
	</div>
@endif

<p class="mb-2 d-flex tx-gray-600">Subtotal <span class="mg-l-auto">Rp 111.000</span></p>
<p class="mb-2 d-flex tx-gray-600">Voucher <span class="mg-l-auto">Rp 0</span></p>

<hr>

<h5 class="mb-2 d-flex tx-dark tx-bold">Total <span class="mg-l-auto">Rp 111.000</span></h5>
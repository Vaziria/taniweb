<!-- Trigger -->
<!-- add attributes {  data-toggle="modal" data-target="#voucher-select" } -->

<!-- Voucher Select -->
<div class="modal fade" id="voucher-select" tabindex="-1" role="dialog" aria-labelledby="voucherLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-10">
            <div class="modal-header bd-0">
                <h5 class="modal-title tx-bold" id="billInfoLabel">Voucher Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Anda memiliki kode voucher? Masukkan disini</p>
                <div class="d-flex mb-4">
                	<input name="voucher" class="form-control mr-3 rounded-5" placeholder="Masukkan kode voucer">
                	<button disabled class="btn btn-info rounded-5 px-5 tx-bold">Pakai</button>
                </div>

                <hr>

                <label class="d-flex mb-3"><b>Pilih Voucher</b><span class="mg-l-auto">(2 voucer)</span></label>

                <!-- empty voucher -->
                <div class="tx-center d-none">
					<i class="fal fa-ticket fa-4x tx-info d-block mb-2"></i>
					<h6 class="tx-bold">Anda tidak memiliki voucer yang sesuai</h6>
					<p class="tx-gray-500 tx-13">Tidak ada voucer yang sesuai minimum transaksi saat ini.</p>
				</div>

                <a class="bd d-flex p-3 rounded-10 mb-3">
                	<i class="fad fa-ticket fa-3x mr-3 tx-info"></i>
                	<div>
                		<h6 class="tx-bold mb-0 mt-1 tx-dark">KODE: ASEPURATMAN02</h6>
                		<p class="tx-gray-600 tx-12 mb-0">Gratis ongkir minimal pembelian Rp 100.000.</p>
                	</div>
                </a>
                <a class="bd d-flex p-3 rounded-10">
                	<i class="fad fa-ticket fa-3x mr-3 tx-info"></i>
                	<div>
                		<h6 class="tx-bold mb-0 mt-1 tx-dark">KODE: LEMBAYUNGTANI</h6>
                		<p class="tx-gray-600 tx-12 mb-0">Cashback 50% minimal pembelian Rp 50.000.</p>
                	</div>
                </a>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style type="text/css" scoped></style>
@endpush

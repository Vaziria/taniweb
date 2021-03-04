@extends('layouts.dashboard-user')

@section('content')
	<h4 class="tx-bold"><i class="fad fa-user tx-info"></i> Akun Saya</h4>
	<p class="mb-5 tx-gray-600">Lengkapi data diri Anda untuk memudahkan proses transaksi.</p>

	<h5 class="tx-bold mb-3">Foto Profil</h5>
	<div class="d-flex product-action rounded-5 mb-5">
		<img src="{{ config('user.default_image') }}" class="wd-100 rounded-5">
		<div class="ml-3 pd-t-30">
			<div class="btn btn-outline-primary rounded-5 tx-bold mr-3">Upload Gambar Baru</div>
			<div class="btn btn-danger rounded-5 tx-bold">Hapus</div>
		</div>
	</div>

	<h5 class="tx-bold mb-3">Data Diri</h5>
	<div class="row mb-5">
		<div class="col-md-6 mb-4">
			<h6 class="form-label tx-bold mb-2">Nama</h6>
			<input value="{{ Auth::user()->name }}" class="form-control rounded-5" disabled>
		</div>
		<div class="col-md-6 mb-4">
			<h6 class="form-label tx-bold mb-2">Jenis Kelamin</h6>
			<select class="form-control rounded-5" disabled>
				<option>Pria</option>
			</select>
		</div>
		<div class="col-12">
			<h6 class="form-label tx-bold mb-2">Tanggal Lahir</h6>
			<input type="date" value="2000-03-30" class="form-control rounded-5" disabled>
		</div>
	</div>

	<h5 class="tx-bold mb-3">Kontak</h5>
	<div class="mb-2">
		<h6 class="form-label tx-bold mb-2">Email</h6>
		<input value="{{ Auth::user()->email }}" class="form-control rounded-5" disabled>
	</div>
	<div class="mb-5">
		<h6 class="form-label tx-bold mb-2">Handphone</h6>
		<input value="628547932317" class="form-control rounded-5" disabled>
	</div>

	<div class="mb-5">
		<button class="btn btn-info rounded-5 tx-bold d-block mg-l-auto">Edit Profil</button>
	</div>

@push('styles')
	<style type="text/css" scoped>
		.btn-danger {
			background: rgba(200, 35, 51, 0.2);
			color: rgb(200, 35, 51);
		}
	</style>
@endpush
@endsection

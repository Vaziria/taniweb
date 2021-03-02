@extends('layouts.dashboard')

@section('content')
	<div class="container py-5">
		<div class="row">

			<!-- filter -->
			<div class="col-md-3">
				@include('dashboard.search.filter')
			</div>


			<div class="col-md-9">

				<!-- sorting -->
				<div class="d-flex mb-5">
					<div>
						<h3 class="tx-bold">Hasil Pencarian</h3>
						<small class="tx-gray-500">{{ $product_total }} hasil untuk produk untuk keyword <b class="tx-dark">"{{ $keyword }}"</b></small>
					</div>
					<form class="d-flex mg-l-auto">
						<label class="form-label mt-2 mr-3">Urutkan: </label>
						<select id="sort-product" class="form-control rounded-5 tx-bold mb-3">
							<option value="">Paling Sesuai</option>
							<option value="harga_tertinggi">Harga Tertinggi</option>
							<option value="harga_terendah">Harga Terendah</option>
							<option value="">Diskon</option>
							<option value="az">A - Z</option>
							<option value="za">Z - A</option>
						</select>
					</form>
				</div>

				<!-- product empty -->
				@if($product_total == 0)
					<div class="tx-center mg-b-100">
						<i class="fab fa-pagelines fa-4x tx-info d-block mb-2"></i>
						<h5 class="tx-bold">Tidak ada hasil untuk <b>"{{ $keyword }}"</b></h5>
						<p class="tx-gray-500">Cobalah menggunakan kata kunci lain</p>
					</div>

					<h4 class="tx-bold mb-4"><i class="fas fa-clipboard-check tx-info"></i> Coba Produk Pilihan yang Lain</h4>
					<div class="row mb-3">
				        @foreach ($product_pilihan as $product)
				            <div class="col-6 col-md-4 col-lg-3 mb-3">
				                @include('components.products.card', ['product' => $product])
				            </div>
				        @endforeach
				    </div>
				@endif

				<!-- product card -->
				<div class="row mb-3">
			        @foreach ($products as $product)
			            <div class="col-6 col-md-4 col-lg-3 mb-3">
			                @include('components.products.card', ['product' => $product])
			            </div>
			        @endforeach
			    </div>
			</div>
		</div>
	</div>

@push('scripts')
	<script type="text/javascript">
		const sorting = sort => {
			$('#sort')[0].value = sort.target.value
			$('#filter-product')[0].submit()
		}

		$('#sort-product')[0].value = `{{ $request->sort }}`
		$('#sort-product').on('input', sorting)
	</script>
@endpush
@endsection
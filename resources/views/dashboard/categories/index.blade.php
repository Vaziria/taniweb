@extends('layouts.dashboard')

@section('content')
<div class="container">

    <div class="py-5">
        <h4 class="tx-bold mb-4"><i class="fas fa-tags tx-info"></i> Kategori</h4>
        @include('components.categories.slider', ['active' => $category_data['name']])
    </div>

    <h4 class="tx-bold mb-4"><i class="{{ $category_data['icon'] }} tx-{{ $category_data['color'] }}"></i> {{ $category_data['name'] }}</h4>
    <div class="row mb-3">
        @foreach ($category_products as $product)
            <div class="col-6 col-md-3 col-lg mb-3">
                @include('components.products.card', ['product' => $product])
            </div>
        @endforeach
    </div>
    <button class="btn btn-info tx-bold d-block mg-x-auto rounded-5 mb-5">Muat Lebih Banyak</button>
</div>
@endsection

@push('styles')
	<style scoped type="text/css">
		@media(min-width: 992px) {
			.col-lg {
				min-width: 20%;
				max-width: 20%;
			}
		}
	</style>
@endpush
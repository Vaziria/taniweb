@extends('layouts.dashboard')

@section('content')
<div class="container">

    <div class="py-5">
        <h4 class="tx-bold mb-4"><i class="fas fa-tags tx-info"></i> Kategori</h4>
        @include('components.categories.slider', ['active' => $category_data['name']])
    </div>

    <h4 class="tx-bold mb-4"><i class="{{ $category_data['icon'] }} tx-{{ $category_data['color'] }}"></i> {{ $category_data['name'] }}</h4>
    <div class="row mb-3">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-6 col-md-3 col-lg">
                @include('components.products.card')
            </div>
        @endfor
    </div>
    <div class="row mb-3">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-6 col-md-3 col-lg">
                @include('components.products.card')
            </div>
        @endfor
    </div>
    <div class="row mb-3">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-6 col-md-3 col-lg">
                @include('components.products.card')
            </div>
        @endfor
    </div>
    <div class="row mb-3">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-6 col-md-3 col-lg">
                @include('components.products.card')
            </div>
        @endfor
    </div>
    <button class="btn btn-info tx-bold d-block mg-x-auto rounded-5 mb-5">Muat Lebih Banyak</button>
</div>
@endsection

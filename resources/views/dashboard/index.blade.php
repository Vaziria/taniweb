@extends('layouts.dashboard')

@section('content')
	<div class="container">
	   <div id="carouselExampleIndicators" class="carousel slide shadow-base bd bd-gray-200 mb-5" data-ride="carousel">
	      <div class="carousel-inner">
	        	<div class="carousel-item active">
	         	<img class="d-block w-100" src="{{ asset('img/banner/1.jpg') }}" alt="First slide">
	        	</div>
	        	<div class="carousel-item shadow-base">
	         	<img class="d-block w-100" src="{{ asset('img/banner/2.jpg') }}" alt="Second slide">
	        	</div>
	        	<div class="carousel-item shadow-base">
	         	<img class="d-block w-100" src="{{ asset('img/banner/3.jpg') }}" alt="Third slide">
	        	</div>
	      </div>
	      <ol class="carousel-indicators bg-info m-0 pos-absolute" style="bottom: -30px !important;">
	        	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	        	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	      </ol>
	   </div>

	   <div class="py-5">
	      <h4 class="tx-bold mb-4"><i class="fas fa-tags tx-info"></i> Kategori</h4>
	      @include('components.categories.slider')
	   </div>

	   <h4 class="tx-bold mb-4"><i class="fas fa-leaf tx-info"></i> Terbaru</h4>
	   <div class="mb-2">
	     	@include('components.products.slider-card', ['id' => 'terbaru', 'products' => $product_terbaru])
	   </div>

	   <h4 class="tx-bold mb-4"><i class="fas fa-clipboard-check tx-info"></i> Produk Pilihan</h4>
	   <div class="mb-2">
	      @include('components.products.slider-card', ['id' => 'pilihan', 'products' => $product_pilihan])
	   </div>

	   <h4 class="tx-bold mb-4"><i class="fas fa-clipboard-check tx-info"></i> Produk Terlaris</h4>
	   <div class="mb-2">
	      @include('components.products.slider-card', ['id' => 'terlaris', 'products' => $product_terlaris])
	   </div>
	</div>
@endsection

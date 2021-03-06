<div class="card card-product bd-0 rounded-5 pos-relative">
    <a href="{{ route('dashboard.product-single', ['id' => $product->id]) }}">
        <img class="img-fluid rounded-5" src="{{ $product->image_1 }}" alt="Image">
    </a>

    <button class="btn pos-absolute r-5 t-5 bg-white pd-x-8 pd-y-5 rounded-circle">
        <i class="fas fa-heart tx-20 @if(isset($wishlist)) tx-danger @else tx-gray-400 @endif mt-1"></i>
    </button>

    <div class="card-body p-2">
        <a href="{{ route('dashboard.product-single', ['id' => $product->id]) }}" class="ht-100">
            <small class="tx-success d-block mb-2"><i class="fas fa-tag"></i> {{ $product->cat_id }}</small>
            <h6 class="tx-bold tx-13 text-capitalize product-title">{{ $product->name }}</h6>
            <small class="tx-gray-600">25kg / pack</small>
        </a>
        <a href="{{ route('dashboard.product-single', ['id' => $product->id]) }}" class="ht-70">
            <div class="tx-12">
                <small class="tx-gray-600"><del>Rp 70.000</del></small>
                <span class="badge product-discount">Disc 20%</span>
            </div>
            <h5 class="tx-bold tx-15 tx-orange mb-0">Rp {{ number_format($product->price) }} <small class="tx-gray-600">/ pack</small></h5>
            <small class="tx-gray-600">min 1 pack</small>
        </a>
    </div>
    <div class="add-cart p-2 ht-60">
        <button class="d-none btn btn-info btn-sm btn-block tx-bold rounded-5">
            + Keranjang
        </button>
    </div>
</div>
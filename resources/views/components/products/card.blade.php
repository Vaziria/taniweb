<div class="card card-product bd-0 rounded-5 pos-relative">
    <a href="{{ route('product.single', ['id' => 'asdasd']) }}">
        <img class="img-fluid rounded-5" src="https://mdm.tanihub.com/images/10113/product/1600056066-2305051698-1.jpeg" alt="Image">
    </a>

    <button class="btn pos-absolute r-0 bg-white pd-x-8 pd-y-5 rounded-circle"><i class="fas fa-heart tx-20 tx-gray-400 mt-1"></i></button>

    <div class="card-body p-2">
        <a href="{{ route('product.single', ['id' => 'asdasd']) }}" class="ht-100">
            <small class="tx-success d-block mb-2"><i class="fas fa-tag"></i> Beras</small>
            <h6 class="tx-bold tx-13 text-capitalize product-title">Beras Parepare Medium, Poles 1x, Poles 2x</h6>
            <small class="tx-gray-600">25kg / pack</small>
        </a>
        <a href="{{ route('product.single', ['id' => 'asdasd']) }}" class="ht-70">
            <div class="tx-12">
                <small class="tx-gray-600"><del>Rp 70.000</del></small>
                <span class="badge product-discount">Disc 20%</span>
            </div>
            <h5 class="tx-bold tx-15 tx-orange mb-0">Rp 60.00 <small class="tx-gray-600">/ pack</small></h5>
            <small class="tx-gray-600">min 1 pack</small>
        </a>
    </div>
    <div class="add-cart p-2 ht-60">
        <button class="d-none btn btn-info btn-sm btn-block tx-bold rounded-5">
            + Keranjang
        </button>
    </div>
</div>
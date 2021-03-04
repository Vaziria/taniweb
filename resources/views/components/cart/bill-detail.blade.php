<!-- Trigger -->
<!-- add attributes {  data-toggle="modal" data-target="#billInfo" } -->

<!-- Bill Detail -->
<div class="modal fade" id="billInfo" tabindex="-1" role="dialog" aria-labelledby="billInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-10">
            <div class="modal-header bd-0">
                <h5 class="modal-title tx-bold" id="billInfoLabel">Ringkasan Belanja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="tx-15 mb-3"><i class="fad fa-shopping-basket tx-gray-600"></i> 3 produk</h6>
                
                @foreach($carts as $product)
                	<div class="d-flex mb-3">
                		<div>
                            <a href="{{ route('dashboard.product-single', ['id' => $product->id]) }}">
                			    <img src="{{ $product->image_1 }}" class="wd-50 mr-3 rounded-5">
                            </a>
                		</div>
                		<div class="ellipsis mr-3">
                			<h6 class="tx-bold mb-1 ellipsis">
                                <a class="tx-dark" href="{{ route('dashboard.product-single', ['id' => $product->id]) }}">
                                    {{ $product->name }}
                                </a>
                            </h6>
                			<div>
								<del class="tx-13 tx-gray-400">Rp {{ number_format($product->price + 10000) }}</del>
								<span class="badge product-discount">Disc 20%</span>
							</div>
							<span>
								<b class="tx-orange">Rp {{ number_format($product->price) }}</b> 
								<small class="tx-gray-600">/ pack</small></span>
                		</div>
                		<div class="mg-l-auto">
                			<h6 class="tx-bold no-wrap">1 x</h6>
                		</div>
                	</div>
                @endforeach

                @include('components.cart.bill-info')

            </div>
        </div>
    </div>
</div>
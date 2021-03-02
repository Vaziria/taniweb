<div class="wd-100p d-block overflow-hidden">
	<div id="{{ $id }}-slider" class="px-2 mb-3">
	    @foreach ($products as $product)
	        <div class="">
	            @include('components.products.card', ['product' => $product])
	        </div>
	    @endforeach
	</div>
</div>

@push('styles')
    <style scoped type="text/css">
        #{{ $id }}-slider .owl-nav .owl-prev {
            top: 224px;
            left: 0px;
        }
        #{{ $id }}-slider .owl-nav .owl-next {
            top: 224px;
            right: 0px;
        }
    </style>
@endpush
@push('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function($){

            const slider = $('#{{ $id }}-slider'),
            config = {
                nav: true,
                loop:false,
                dots: false,
                pagination: false,
                margin: 50,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1200: {
                        items: 5,
                        margin: 20
                    }
                }
            };

            slider.each(function () {
                $(this).owlCarousel(config);
            });
        });
    </script>
@endpush
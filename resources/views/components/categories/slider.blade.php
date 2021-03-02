<div class="wd-100p d-block p-1 overflow-hidden">
    <div id="kategori-slider" class="d-flex">
        @foreach ($categories as $key => $category)

            @if(isset($active) && $active == $category['name'])
                <a href="{{ route('dashboard.categories', ['id' => $key % 10 != 0 ? $key % 10 : 1 ]) }}" class="category-icon active tx-center wd-100 ht-100p p-2 rounded-5 d-block">
            @else
                <a href="{{ route('dashboard.categories', ['id' => $key % 10 != 0 ? $key % 10 : 1 ]) }}" class="category-icon tx-center wd-100 ht-100p p-2 rounded-5 d-block">
            @endif
            
                <i class="{{ $category['icon'] }} tx-{{ $category['color'] }} tx-30 d-block"></i>
                <span class="tx-12 tx-gray-700">{{ $category['name'] }}</span>
            </a>
        @endforeach
    </div>
</div>
@push('styles')
    <style scoped type="text/css">
        #kategori-slider .owl-nav .owl-prev {
            top: 10px;
            left: 0px;
        }
        #kategori-slider .owl-nav .owl-next {
            top: 10px;
            right: 0px;
        }
    </style>
@endpush
@push('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function($){

            const slider = $('#kategori-slider'),
            config = {
                nav: true,
                loop:false,
                dots: false,
                pagination: false,
                autoWidth: true,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
            };

            slider.each(function () {
                $(this).owlCarousel(config);
            });
        });
    </script>
@endpush
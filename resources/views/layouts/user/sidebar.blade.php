<div id="user-sidebar">

	@php
		$current_route = Route::currentRouteName();
		$menu = [
			'Akun Saya' => [
				'icon' => 'fad fa-user',
				'route' => 'dashboard.account'
			],
			'Pesanan Saya' => [
				'icon' => 'fad fa-box-full',
				'route' => 'dashboard.orders'
			],
			'Tagihan Saya' => [
				'icon' => 'fad fa-receipt',
				'route' => 'dashboard.bills'
			],
			'Wishlist' => [
				'icon' => 'fad fa-box-heart',
				'route' => 'dashboard.wishlist'
			]
		];
	@endphp

	<div>
		@foreach($menu as $name => $data)
			@if (Route::has($data['route']))
				<a href="{{ route($data['route']) }}" class="btn btn-block btn-menu-user tx-left d-flex mb-3 rounded-5 @if($current_route == $data['route']) bg-gray-100 @endif">
					<i class="{{ $data['icon'] }} fa-2x tx-info wd-50"></i> <b class="tx-5 mt-1">{{ $name }}</b>
				</a>
			@endif
		@endforeach
	</div>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/sticky-sidebar.min.js" integrity="sha512-iVhJqV0j477IrAkkzsn/tVJWXYsEqAj4PSS7AG+z1F7eD6uLKQxYBg09x13viaJ1Z5yYhlpyx0zLAUUErdHM6A==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            new StickySidebar('#user-sidebar', {topSpacing: 90})

        });
    </script>
@endpush
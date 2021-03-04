<div id="filter-sidebar">
	<div class="card bd-0 rounded-5 product-action">
		<div class="card-header bg-white mt-1">
			<h5 class="tx-bold d-flex">Filter</h5>
		</div>
		<form id="filter-product" class="card-body">

			<input type="hidden" name="q" value="{{ $keyword }}">
			<input id="sort" type="hidden" name="sort" value="{{ $request->sort }}">

			<label class="form-label">Kategori</label>
			<select class="form-control rounded-5 mb-3" name="cat_id">
				<option value="">Pilih Kategori</option>
				@for($i = 1; $i <= 10; $i++)
					@if($i == $request->cat_id)
						<option selected>{{ $i }}</option>
					@else
						<option>{{ $i }}</option>
					@endif
				@endfor
			</select>

			<label class="form-label">Provinsi</label>
			<select class="form-control rounded-5 mb-3">
				<option>Pilih Provinsi</option>
			</select>

			<label class="form-label">Kota</label>
			<select class="form-control rounded-5 mb-3">
				<option>Pilih Kota</option>
			</select>

			<label class="form-label">Harga Minimal</label>
			<div class="input-group mb-3">
				<span class="input-group-prepend input-group-text">Rp</span>
				<input type="number" class="form-control rounded-5" name="price_min" value="{{ $request->price_min }}">	
			</div>
			
			<label class="form-label">Harga Maksimal</label>
			<div class="input-group mb-5">
				<span class="input-group-prepend input-group-text">Rp</span>
				<input type="number" class="form-control rounded-5" name="price_max" value="{{ $request->price_max }}">	
			</div>

			<button class="btn btn-info btn-block tx-bold rounded-5">Filter</button>
			<button type="reset" class="btn btn-danger btn-block tx-bold rounded-5">Reset</button>
		</form>
	</div>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/sticky-sidebar.min.js" integrity="sha512-iVhJqV0j477IrAkkzsn/tVJWXYsEqAj4PSS7AG+z1F7eD6uLKQxYBg09x13viaJ1Z5yYhlpyx0zLAUUErdHM6A==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            new StickySidebar('#filter-sidebar', {topSpacing: 90})
        });
    </script>
@endpush
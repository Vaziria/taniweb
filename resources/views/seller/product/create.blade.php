<h1>Create Produk</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('./product') }}" enctype="multipart/form-data">
    name <input type="text" name="name"> <br />
    price <input type="text" name="price"> <br />
    stock <input type="text" name="stock"> <br />
    stock_unit <input type="text" name="stock_unit"> <br />
    desc <input type="text" name="description"> <br />
    image <input type="file" name="image_1"> <br />
    image <input type="file" name="image_2"> <br />
    <input type="hidden" name="cat_id" value="12"> <br />
    <button type="submit">create</button>
    {{ csrf_field() }}
</form>
<h1> list Product </h1>

<a href="{{ route('product.create') }}">create</a>

@foreach ($products as $product)
    <a href="{{ route('product.show', [ 'product' => $product->id ]) }}">product {{ $product->name }}</a><br>
@endforeach
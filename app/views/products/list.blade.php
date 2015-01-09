@foreach(Product::all() as $product)

{{link_to_route('products.edit', $product->name, $product->id)}}<br>

@endforeach
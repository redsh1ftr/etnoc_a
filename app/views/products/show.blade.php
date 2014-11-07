F:\PHP\htdocs\etnoc_a\app/views/products/show.blade.php	




{{$product->name}}



@foreach($product->inventoryCheck() as $inv)

{{$inv->small}}<br>

@endforeach
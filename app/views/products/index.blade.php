lll




@foreach($products as $p)



<p>
		<td>{{link_to_route('products.show', "$p->name", array('id' => $p->id))}}
		<td>{{$p->description}}<tr>






	


@endforeach
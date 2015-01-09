{{ Form::open(array('action' => 'ProductsController@store', 'files' => true)) }}

{{ Form::text('name', '', array('placeholder' => 'Name')) }}
{{ Form::select('type', array(
	'tee' => 'Tee',
	'tank' => 'Tank',
	'3quarter' => '3/4 Tee',
	'hoodie' => 'Hoodie',
	'accessory' => 'Accessory',

	 )) }}
<left>
{{ Form::checkbox('sale', '1')}} {{ Form::label('sale', 'On Sale', array('style' => 'color:#ffffff'))}}<br>
{{ Form::checkbox('upcoming', '1')}} {{ Form::label('upcoming', 'Upcoming Item', array('style' => 'color:#ffffff'))}}<br> 
{{ Form::checkbox('preorder', '1')}} {{ Form::label('preorder', 'Pre-Order', array('style' => 'color:#ffffff'))}}<br> 
{{Form::text('paypal', '', array('placeholder' => 'Paypal Button ID'))}}
</left>

<table>
<th>{{Form::label('sizes', 'Available Sizes:')}}</th><tr>
	
	<?php $sizes = Size::all();?>

	@foreach($sizes as $size)
	<td>{{Str::title($size->size)}}
	<td>{{Form::text($size, '', array('placeholder' => 'Quantity...(if available)'))}}
	<td>{{Form::text("$size"."_cost", '', array('placeholder' => 'Order Cost...'))}}
	<td>{{Form::text("$size"."_price", '', array('placeholder' => 'Sale Price...'))}}<tr>
	@endforeach	
</table>


<td>{{ Form::textarea('description', '', array('placeholder' => 'Product Description')) }}
</table>

<table>
	<td>{{Form::label('image_1', 'Main Image')}} <td>{{ Form::file('image_1')}}<tr>
	<td>{{Form::label('image_2', 'Image 2')}}<td> {{ Form::file('image_2')}}<tr>
	<td>{{Form::label('image_3', 'Image 3')}}<td> {{ Form::file('image_3')}}<tr>
</table>


<button type="submit" class="btn-large btn-inverse">{{"Create Product"}}</button>

{{Form::close()}}

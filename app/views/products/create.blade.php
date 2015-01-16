{{ Form::open(array('action' => 'ProductsController@store', 'files' => true)) }}

{{ Form::text('name', '', array('placeholder' => 'Name')) }}


<select name="type" style="color:#000000">

<option style="font-size:12px">Select Clothing Type....</option>
	@foreach(ClothingCategory::all() as $cats)
	<option style="color:#000000" value="{{$cats->item_type}}" >{{Str::title($cats->item_type)}}</option>
	@endforeach

</select>
<br><br>



    <div class="large-6 columns">
      {{ Form::checkbox('sale', '1')}}<label style="color:#ffffff" for="sale">On Sale</label><br>
      {{ Form::checkbox('upcoming', '1')}}<label style="color:#ffffff" for="upcoming">Upcoming</label><br>
      {{ Form::checkbox('preorder', '1')}}<label style="color:#ffffff" for="preorder">Preorder</label><br>
    </div>

 


{{Form::text('paypal', '', array('placeholder' => 'Paypal Button ID'))}}

	
	<?php $sizes = Size::all();?>


	@foreach($sizes as $size)
	<div class="panel">
		<div class="row">
			<div class="small-6 columns">{{Str::title($size->size)}}</div>
			<div class="small-6 columns">{{Form::text('size', '', array('placeholder' => 'Inventory....'))}}</div>
			<div class="small-6 columns">{{Form::text("$size"."_cost", '', array('placeholder' => 'Order Cost...'))}}</div>
			<div class="small-6 columns">{{Form::text("$size"."_price", '', array('placeholder' => 'Sale Price...'))}}</div>
		</div>
	</div>
	<br>
	@endforeach	


<td>{{ Form::textarea('description', '', array('placeholder' => 'Product Description')) }}
</table>

<table>
	<td>{{Form::label('image_1', 'Main Image')}} <td>{{ Form::file('image_1')}}<tr>
	<td>{{Form::label('image_2', 'Image 2')}}<td> {{ Form::file('image_2')}}<tr>
	<td>{{Form::label('image_3', 'Image 3')}}<td> {{ Form::file('image_3')}}<tr>
</table>


<button type="submit" class="btn-large btn-inverse">{{"Create Product"}}</button>

{{Form::close()}}

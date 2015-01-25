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
      {{ Form::checkbox('sale', '1')}}<label style="color:#ffffff" for="sale">On Sale</label>
      {{ Form::checkbox('upcoming', '1')}}<label style="color:#ffffff" for="upcoming">Upcoming</label>
      {{ Form::checkbox('preorder', '1')}}<label style="color:#ffffff" for="preorder">Preorder</label>
    </div>

 


{{Form::text('paypal', '', array('placeholder' => 'Paypal Button ID'))}}

	
	<?php $sizes = Size::all();?>


	@foreach($sizes as $size)
	<div class="panel">
		<div class="row">
			<div class="large-6 columns">{{Str::title($size->size)}}</div>
			<div class="large-6 columns">{{Form::text('size', '', array('placeholder' => 'Inventory....'))}}</div>
			<div class="large-6 columns">{{Form::text("$size"."_cost", '', array('placeholder' => 'Order Cost...'))}}</div>
			<div class="large-6 columns">{{Form::text("$size"."_price", '', array('placeholder' => 'Sale Price...'))}}</div>
		</div>
	</div>
	<br>
	@endforeach	


<td>{{ Form::textarea('description', '', array('placeholder' => 'Product Description')) }}
</table>

	
<?php $imagecount = range(2, 10, 1);?>
		<table>
			<td>	<div class="large-12 columns" color = "#ffffff"{{Form::label("image_1", "Main Image")}}<td>{{ Form::file("image_1")}}</div>
		</table>
	@foreach($imagecount as $nImage)
		<table>
			<td>	<div class="large-12 columns" color = "#ffffff"{{Form::label("image_$nImage", "Image $nImage")}}<td>{{ Form::file("image_nImage")}}</div>
		</table>
	@endforeach

<button type="submit" class="btn-large btn-inverse">{{"Create Product"}}</button>

{{Form::close()}}

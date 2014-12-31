@extends('layouts.master')



@section('content')

{{Form::model($product, array('method' => 'put', 'route' => array('products.update', $product->id)))}}

{{Form::text('name')}}

<div style="color:#000000;">
        <select name="type">
          <option value="{{$product->type}}">{{Str::title($product->type)}}</option>
          <option value="tee">Tee</option>
          <option value="tank">Tank</option>
          <option value="3quarter">3/4 Tee</option>
          <option value="hoodie">Hoodie</option>
          <option value="accessory">Accessory</option>
        </select>



{{ Form::hidden('sale', false) }}
{{ Form::hidden('upcoming', false) }}
{{ Form::hidden('preorder', false) }}
{{ Form::checkbox('sale')}} {{ Form::label('sale', 'On Sale', array('style' => 'color:#ffffff'))}}
{{ Form::checkbox('upcoming')}} {{ Form::label('upcoming', 'Upcoming Item', array('style' => 'color:#ffffff'))}} 
{{ Form::checkbox('preorder')}} {{ Form::label('preorder', 'Pre-Order', array('style' => 'color:#ffffff'))}} 



{{Form::text('description', $product->description, array('placeholder' => 'Description'))}}

<div style="color:#ffffff;">
	<div class="row">
		<div class="small-3 columns">Size</div>
		<div class="small-3 columns">Inventory</div>
		<div class="small-3 columns">Cost</div>
		<div class="small-3 columns">Price</div>
	</div>

@foreach($product->sizeList() as $sizes)
	
	<div class="row">
		<div class="small-3 columns">{{Str::title($sizes)}}</div>
		<div class="small-3 columns">{{Form::text($sizes, $product->inventoryCheck($sizes))}}</div>
		<div class="small-3 columns">{{ Form::label("$sizes Price", 'Price', array('style' => 'color:#ffffff'))}}{{Form::text('xsmall_price', $price->xsmall)}}</div>
		<div class="small-3 columns">{{ Form::label("$sizes Cost", 'Cost', array('style' => 'color:#ffffff'))}}{{Form::text('xsmall_cost', $cost->xsmall)}}</div>
	</div>

@endforeach
</div>






{{Form::submit("Update $product->name")}}
{{Form::close()}}



@stop
@extends('layouts.master')

@section('content')

	@if($type == 'all')

	<img src="http://www.eternallynocturnal.com/webstore/public/images/fallineup.jpg"><br><br><br>

	@elseif($type == 'sale')

	<h1>SALES & UPCOMING ITEMS</h1><br>
	
	@else

	<h1>{{Str::upper(Str::plural($products->first()->getFirstType('type')))}}</h1><br>

	@endif

@foreach($products as $prod)








<br>

<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
@foreach($prod->getPictures() as $pic)

<a href="#" data-reveal-id="Mod_{{$pic->id}}"><img style="max-width:500px;max-height:500px;" data-caption="{{$prod->name}}" src="http://www.eternallynocturnal.com/webstore/public/images/{{$pic->image_1}}"></a>


<div id="Mod_{{$pic->id}}" class="reveal-modal" data-reveal>
<ul class="clearing-thumbs medium-block-grid-1" data-clearing>
 <li><a href="http://www.eternallynocturnal.com/webstore/public/images/{{$pic->image_1}}"><img style="max-width:500px;max-height:500px;"  data-caption="{{$prod->name}}" src="http://www.eternallynocturnal.com/webstore/public/images/{{$pic->image_1}}"></a></li>


@if(!$prod->upcoming > '')
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="{{$prod->paypal}}">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


<div class="row">

	<div class="small-2 columns">&nbsp</div>
@if(!$prod->inventoryCheck('xsmall') == 'onesize')
  <div class="small-6 columns">
		<select name="os0" style="max-width:370px">

@if($prod->inventoryCheck('small') > '')
			<option value="Small">Small</option>
@endif

@if($prod->inventoryCheck('medium') > '')
			<option value="Medium">Medium</option>
@endif

@if($prod->inventoryCheck('large') > '')
			<option value="Large">Large</option>			
@endif

@if($prod->inventoryCheck('xlarge') > '')		
			<option value="X-Large">X-Large</option>			
@endif

@if($prod->inventoryCheck('xxlarge') > '')		
			<option value="XX-Large">XX-Large </option>			
@endif

</select>
  </div>

@endif

			<input type="hidden" name="currency_code" value="USD">
@if($prod->inventoryCheck('xsmall') == 'onesize')

  <div class="small-7.5 columns">
<button class="btn-large btn-inverse" type="submit" value="Add to Cart" name="submit" width="auto">
			One Size Only &nbsp<span class="icon-shopping-cart"></span>
			</button>

@else			
  <div class="small-1 columns">
			<button class="btn-large btn-inverse" type="submit" value="Add to Cart" name="submit">
			<span class="icon-shopping-cart"></span>
			</button>
@endif

	</div>



  <div class="small-2 columns"></div>


</form></div></div>
<br><br>
@endif





  <a class="close-reveal-modal">&#215;</a>
</div>
<br>

{{$prod->name}} - 


	@if($prod->upcoming > '')  (COMING SOON!)

	@else ${{$prod->priceCheck('small')}}

	@endif

	@if($prod->sale > '') (ON SALE!)
	@endif


	@if($prod->preorder > '') (COMING SOON - PRE-ORDER ONLY!)
	@endif




@endforeach
</ul>

@endforeach


@stop


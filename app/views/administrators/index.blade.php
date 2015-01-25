@extends('layouts.master')

@section('right_menu')

	<aside class="right-off-canvas-menu">
	      <ul class="off-canvas-list">

	        <li><img src="http://www.eternallynocturnal.com/images/witeskull.png"></li>
	        <li>TEST</li>
	 	</ul>
	</aside>


@stop



@section('content')
<center>

<dl class="tabs" data-tab>
	<dd class="active">
		<a href="#merch">Merch</a></dd>
    <dd><a href="#newproduct">New Product</a></dd>
    <dd><a href="#events">Events</a></dd>
    <dd><a href="#newevent">New Event</a></dd>
	<dd><a href="#contacts">Contacts</a></dd>
    <dd><a href="#newcontact">New Contact</a></dd>
    <dd><a href="#orders">Orders</a></dd>
    <dd><a href="#neworder">New Order</a></dd>



</dl>
<div class="tabs-content">

	  <div class="content active" id="merch">
	  			{{View::make('administrators.product_list')}}
	  </div>

	  <div class="content" id="newproduct">
	  			{{View::make('products.create')}}
	  			  
	  </div>
	  <div class="content" id="events">
	    		  {{View::make('events.index')}}
	  </div>

	  <div class="content" id="newevent">
	   			  {{View::make('events.create')}}
	  </div>

 	<div class="content" id="contacts">
   			  {{View::make('contacts.index')}}
  	</div>
 	<div class="content" id="newcontact">
   			  {{View::make('contacts.create')}}
  	</div>
 	<div class="content" id="orders">
   			  {{View::make('orders.index')}}
  	</div>
 	<div class="content" id="neworder">
   			  {{View::make('orders.create')}}
  	</div>


</div>

</center>
@stop
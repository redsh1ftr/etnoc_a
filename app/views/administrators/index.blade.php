@extends('layouts.master')

@section('style')

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
    <dd><a href="#newcontacts">New Contact</a></dd>
    <dd><a href="#orders">Orders</a></dd>
    <dd><a href="#neworder">New Order</a></dd>



</dl>
<div class="tabs-content">

  <div class="content active" id="merch">
  			{{View::make('products.list')}}
  </div>

  <div class="content" id="newproduct">
  			{{View::make('products.create')}}
  			  
  </div>
  <div class="content" id="events">
    		  {{View::make('contacts.create')}}
  </div>

  <div class="content" id="newevents">
   			  {{View::make('events.create')}}
  </div>

 	<div class="content" id="newevents">
   			  {{View::make('events.create')}}
  	</div>

</div>

</center>
@stop
@extends('layouts.master')

@section('style')

@stop

@section('content')
<center>

<dl class="tabs" data-tab>
  <dd class="active"><a href="#panel1">New Product</a></dd>
  <dd><a href="#panel2">Current Products</a></dd>
  <dd><a href="#panel3">New Event</a></dd>
  <dd><a href="#panel2">Current & Past Events</a></dd>
  <dd><a href="#panel4">New Contact</a></dd>
  <dd><a href="#panel4">New Order</a></dd>
  <dd><a href="#panel4">Previous Orders</a></dd>


</dl>
<div class="tabs-content">
  <div class="content active" id="panel1">
  			{{View::make('products.create')}}
  </div>
  <div class="content" id="panel2">
  			{{View::make('products.list')}}
  			  {{View::make('events.create')}}
  </div>
  <div class="content" id="panel3">
    		  {{View::make('contacts.create')}}
  </div>
  <div class="content" id="panel4">
   			  {{View::make('products.list')}}
  </div>
</div>

</center>
@stop
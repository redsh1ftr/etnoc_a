@extends('layouts.master')

@section('right_menu')


<?php $include_right_menu = "YES";?>


@stop



@section('content')
<center>


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

 	
 	<div class="content" id="orders">
   			  {{View::make('orders.index')}}
  	</div>
 	<div class="content" id="neworder">
   			  {{View::make('orders.create')}}
  	</div>


</div>

</center>
@stop
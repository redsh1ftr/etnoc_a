@extends('layouts.master')

@section('style')

@stop

@section('content')

<dl class="tabs" data-tab>
  <dd class="active"><a href="#panel1">New Product</a></dd>
  <dd><a href="#panel2">New Event</a></dd>
  <dd><a href="#panel3">New Contact</a></dd>
  <dd><a href="#panel4">New Order Calculator</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel1">
  			  {{View::make('products.create')}}
  </div>
  <div class="content" id="panel2">
    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel3">
    <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel4">
    <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
  </div>
</div>
@stop
@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop



@section('content')



@foreach(Product::all() as $product)

{{link_to_route('products.edit', $product->name, $product->id)}}<br>

@endforeach

@stop
@extends('layouts.master')

@section('content')


@foreach($products as $prod)

<button class="btn-large btn-inverse" value="$prod->name">{{link_to_route('products.show', $prod->name, $prod->id) }}</button><br><br>

@endforeach


@stop


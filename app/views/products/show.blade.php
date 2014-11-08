@extends('layouts.master')

@section('content')

<h1>{{$product->name}}</h1>

<table max-width="70%" layout="fixed">
@foreach($product->sizeList() as $getsizes)




	<td width="20%"><h3><div style="text-align:center">{{Str::title($getsizes)}}</div><h3><tr>

		<td><b>Ordered: </b><td><tr>

		<td><b>Sold: </b><td><tr>

		<td><b>On hand: </b><td>{{$product->inventoryCheck($getsizes) }}<tr>

		<td>Cost: <td>{{$product->costCheck($getsizes)}}<tr>

		<td>Sale Price: <td>{{$product->priceCheck($getsizes)}}<tr>


@endforeach

</table>
@stop
@extends('layouts.master')

@section('style')
<style>
	
	.maincon{
		position: absolute;
		width: 100%;
		height: 100%;
	}

	.left{
		position: relative;
		float: left;
		width: 49%;
		height: 100%;
	}

	.right{
		position: relative;
		width: 50%;
		float: right;
		margin-left:50%;
		height:100%;
	}

</style>


@stop



@section('content')

<div class="maincon">

	<div class="left">

		left

	</div>

		<div class="right">

			right

		
	</div>

</div>


@stop
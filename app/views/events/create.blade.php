@extends('layouts.master')

@section('content')

{{Form::open(array('route' => 'events.create', 'method' => 'post', 'files' => 'true'))}}

{{Form::text('event_name')}}


{{Form::close()}}



@stop
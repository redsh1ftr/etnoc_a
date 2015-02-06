@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop



@section('content')






{{View::make('contacts.contact_manager')}}


<br>


{{View::make('contacts.show')->with('contacts', $contacts)}}


@stop
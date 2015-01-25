@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop



@section('content')

<br><br><br>

{{ Form::open(array('action' => 'ContactsController@store', 'files' => true)) }}


<div class="row">
		<div class="large-6 columns"><div style="color:#000000">
			<select name="type">
				<option>Choose Contact Type..GENERATE FROM LISTTTTTT..</option>
				<option value="ARTIST">Artist</option>
				<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="large-6 columns">{{Form::text('nickname', '', array('placeholder' => 'Alias'))}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
	<div class="large-6 columns">{{Form::text('f_name', '', array('placeholder' => 'First Name'))}}</div>
	<div class="large-6 columns">{{Form::text('l_name', '', array('placeholder' => 'Last Name'))}}</div>
</div>


<div class="row">
	<div class="large-6 columns">{{Form::text('street1', '', array('placeholder' => 'Street Address'))}}</div>
	<div class="large-6 columns">{{Form::text('street2', '', array('placeholder' => 'Street Address (apt, ste, etc.)'))}}</div>
</div>


<div class="row">		
	<div class="large-6 columns">{{Form::text('city', '', array('placeholder' => 'City'))}}</div>
	
	<div class="large-3 columns">{{Form::text('state', '', array('placeholder' => 'State'))}}</div>
	<div class="large-3 columns">{{Form::text('zip', '', array('placeholder' => 'Zip Code'))}}</div>
</div>


<div class="row">
	<div class="large-1 columns"><span class="icon-phone"></span></div>
		<div class="large-5 columns">{{Form::text('phone')}}</div>
	<div class="large-1 columns"><span class="icon-envelope"></span></div>
		<div class="large-5 columns">{{Form::text('email')}}</div>
</div>

<div class="row">
	
	<div class="large-1 columns"><span class="icon-facebook"></span></div>
		<div class="large-5 columns">{{Form::text('facebook', '', array('placeholder' => 'Paste Facebook link here'))}}</div>
	
	<div class="large-1 columns"><span class="icon-twitter"></span></div>
		<div class="large-5 columns">{{Form::text('twitter', '', array('placeholder' => 'Paste Twitter link here'))}}</div>
</div>

<div class="row">	
	<div class="large-1 columns"><span class="icon-instagram"></span></div>	
		<div class="large-5 columns">{{Form::text('instagram', '', array('placeholder' => 'Paste IG link here'))}}</div>
	<div class="large-1 columns"><span class="icon-globe"></span></div>		
		<div class="large-5 columns">{{Form::text('website', '', array('placeholder' => 'Pase Website link here'))}}</div>


</div>

<div class="row">
	{{Form::textarea('notes', '', array('placeholder' => 'Notes', 'style' => 'color:#000000'))}}
</div>
<br>


<button type="submit" class="btn-large btn-inverse">Create New Contact</button>

{{Form::close()}}

<br><br>


@stop
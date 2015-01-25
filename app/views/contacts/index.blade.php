@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop



@section('content')

<h1>Contact Manager</h1>
<br>

@foreach(Contact::all() as $contact)



<a href="#" data-reveal-id="Modal_{{$contact->id}}" class="btn-large btn-inverse"></u>{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}</a><br>

	






<div id="Modal_{{$contact->id}}" class="reveal-modal" data-reveal> 


<ul class="tabs" data-tab >
  <li class="tab-title active" style="width:80px"><a href="#panel1">Profile</a></li>
  <li class="tab-title" style="width:100px"><a href="#panel2">Edit</a></li>
  <li class="tab-title" style="width:100px"><a href="#panel3">Photos</a></li>
</ul>





<div class="tabs-content">
  <div class="content active" id="panel1" style="background-color:#000000;color:#ffffff">
    

    	<div class="row">
    		<div class="large-12 columns">
  				{{$contact->f_n}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}</div>
  		</div>


  		<div class="row">
  			<div class="large-5 columns">{{$contact->street1}} {{$contact->street2}}</div>
  		</div>
  		
  		<div class="row">

  			<div class="large-5 columns">{{$contact->city}} {{$contact->state}} {{$contact->zip}}</div>

  		</div>






	</div>

  <div class="content" id="panel2" style="background-color:#000000;color:#ffffff;">
  




	{{Form::model($contact, array('method' => 'put', 'route' => array('contacts.update', $contact->id)))}}

	

<div class="row">
	
		<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Contact Type</label><div style="color:#000000">
			<select name="type">
			<option value="{{$contact->type}}"><span style="color:#000000">{{Str::title($contact->type)}}</option>
			<option value="ARTIST">Artist</option>
			<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Nickname</label>{{Form::text('nickname')}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">First Name</label>{{Form::text('f_name')}}</div>
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Last Name</label>{{Form::text('l_name')}}</div>
</div>




<div class="row">
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address</label>{{Form::text('street1')}}</div>
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address 2</label>{{Form::text('street2')}}</div>
</div>


<div class="row">		
	<div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">City</label>{{Form::text('city')}}</div>
	
	<div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">State</label>{{Form::text('state')}}</div>
	<div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">Zip Code</label>{{Form::text('zip')}}</div>
</div>


<div class="row">
	<div class="large-1 columns"><a href="#" class="icon-phone"></a></div>
		<div class="large-5 columns">{{Form::text('phone')}}</div>
	<div class="large-1 columns"><a href="#" class="icon-envelope"></a></div>
		<div class="large-5 columns">{{Form::text('email')}}</div>
</div>


<div class="row">
	
	<div class="large-1 columns"><a href="{{$contact->facebook}}" class="icon-facebook"></a></div>
		<div class="large-5 columns">{{Form::text('facebook')}}</div>
	
	<div class="large-1 columns"><a href="#" class="icon-twitter"></a></div>
		<div class="large-5 columns">{{Form::text('twitter')}}</div>
</div>

<div class="row">	
	<div class="large-1 columns"><a href="#" class="icon-instagram"></a></div>	
		<div class="large-5 columns">{{Form::text('instagram')}}</div>
	<div class="large-1 columns"><a href="#" class="icon-globe"></a></div>		
		<div class="large-5 columns">{{Form::text('website')}}</div>


</div>

<div class="row" style=" width:80%;">
	<center style="color:#000000;">
	{{Form::textarea('notes')}}
	</center>
</div>
<br>


<button type="submit" class="btn-large btn-inverse">Update {{$contact->f_name}} {{$contact->l_name}}</button>

{{Form::close()}}

</div>

<div class="content" id="panel3">
  </div>
</div>

<a class="close-reveal-modal">&#215;</a>
</div>


</div>
@endforeach


@stop
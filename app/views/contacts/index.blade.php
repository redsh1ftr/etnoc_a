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


<ul class="tabs" data-tab>
  <li class="tab-title active"><a href="#panel1">Profile</a></li>
  <li class="tab-title"><a href="#panel2">Edit</a></li>
  <li class="tab-title"><a href="#panel3">Photos</a></li>
</ul>





<div class="tabs-content">
  <div class="content active" id="panel1" style="background-color:#000000;color:#ffffff">
    

    	<div class="row">
    		<div class="large-12 columns">
  				{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}
  			</div>
  		</div>





  </div>





  <div class="content" id="panel2">
  




	{{Form::model($contact, array('method' => 'put', 'route' => array('contacts.update', $contact->id)))}}

	

<div class="row">
	
		<div class="small-6 columns"><label>Contact Type</label><div style="color:#000000">
			<select name="type">
			<option value="{{$contact->type}}"><span style="color:#000000">{{Str::title($contact->type)}}</option>
			<option value="ARTIST">Artist</option>
			<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="small-6 columns"><label>Nickname</label>{{Form::text('nickname')}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
	<div class="small-6 columns"><label>First Name</label>{{Form::text('f_name')}}</div>
	<div class="small-6 columns"><label>Last Name</label>{{Form::text('l_name')}}</div>
</div>




<div class="row">
	<div class="small-6 columns">{{Form::text('street1')}}</div>
	<div class="small-6 columns">{{Form::text('street2')}}</div>
</div>


<div class="row">		
	<div class="small-6 columns">{{Form::text('city')}}</div>
	
	<div class="small-3 columns">{{Form::text('state')}}</div>
	<div class="small-3 columns">{{Form::text('zip')}}</div>
</div>


<div class="row">
	<div class="small-1 columns"><a href="#" class="icon-phone"></a></div>
		<div class="small-5 columns">{{Form::text('phone')}}</div>
	<div class="large-1 columns"><a href="#" class="icon-envelope"></a></div>
		<div class="small-5 columns">{{Form::text('email')}}</div>
</div>


<div class="row">
	
	<div class="small-1 columns"><a href="{{$contact->facebook}}" class="icon-facebook"></a></div>
		<div class="small-5 columns">{{Form::text('facebook')}}</div>
	
	<div class="small-1 columns"><a href="#" class="icon-twitter"></a></div>
		<div class="small-5 columns">{{Form::text('twitter')}}</div>
</div>

<div class="row">	
	<div class="small-1 columns"><a href="#" class="icon-instagram"></a></div>	
		<div class="small-5 columns">{{Form::text('instagram')}}</div>
	<div class="small-1 columns"><a href="#" class="icon-globe"></a></div>		
		<div class="small-5 columns">{{Form::text('website')}}</div>


</div>

<div class="row">
	{{Form::textarea('notes', '', array('placeholder' => 'Notes'))}}
</div>
<br>


<button type="submit" class="btn-large btn-inverse">Update {{$contact->f_name}} {{$contact->l_name}}</button>

{{Form::close()}}

</div>

<div class="content" id="panel3">
  </div>

</div>

  
</div>
@endforeach


@stop
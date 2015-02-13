


{{Form::open(array('route' => 'events.store', 'method' => 'post', 'files' => 'true'))}}

<div class="row">
	<div class="large-6 columns">
		{{Form::text('event_name', '', array('placeholder' => 'Event Name'))}}
	</div>

	<div class="large-6 columns">
		{{Form::text('description', '', array('placeholder' => 'Description'))}}
	</div>

	<div class="large-9 columns">
		<select name="contact_id" style="color:#700000;background-color:#000000;">
			<option value="">Select a Contact.</option>
			@foreach(Contact::all() as $contact)
				<option value="{{$contact->id}}">{{$contact->f_name}} "{{$contact->nickname}}" {{$contact->l_name}}</option>
			@endforeach
		</select>
	</div>	

	<div class="large-3 columns" style="color:#700000;font-size:30px">
		<a href="#" data-reveal-id="newContact" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i><i class="fi-torsos-all"></i></a>
	</div>


	<div class="large-9 columns">
		<select name="venue_id" style="color:#700000;background-color:#000000;">
			<option value="">Select a Venue.</option>
			@foreach(EventLocation::all() as $venue)
				<option value="{{$venue->id}}">{{$venue->name}}</option>
			@endforeach
		</select>
	</div>	

	<div class="large-3 columns" style="color:#700000;font-size:30px">
		<a href="#" data-reveal-id="newVenue" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i>Venue</a>
	</div>


	<div class="small-6 columns">

		<input id="datetimepicker_1" type="text" name="start_date" placeholder="Start" >
	
	</div>	

	<div class="small-6 columns">

		<input id="datetimepicker_2" type="text" name="end_date" placeholder="End" >

	</div>	

	<div class="small-6 columns">
		<i class="fi-social-facebook" style="color:#700000;font-size:30px"></i>{{Form::text('facebook', '', array('placeholder' => 'Paste Facebook Link Here'))}}
	</div>	

		

	<div class="small-6 columns">
		<label>Main Image</label>
		{{Form::file('event_logo_image_1')}}
		<label>Banner</label>
		{{Form::file('event_logo_image_2')}}
	</div>	
	


		
		

		<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Show </button>
	</div>


{{Form::close()}}

{{ Form::open(array('action' => 'ContactsController@store', 'files' => true)) }}


<div class="row">
		<div class="small-6 columns"><div style="color:#000000">
			<select name="type">
				<option>Choose Contact Type..GENERATE FROM LISTTTTTT..</option>
				<option value="ARTIST">Artist</option>
				<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="small-6 columns">{{Form::text('nickname', '', array('placeholder' => 'Alias'))}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
	<div class="small-6 columns">{{Form::text('fname', '', array('placeholder' => 'First Name'))}}</div>
	<div class="small-6 columns">{{Form::text('lname', '', array('placeholder' => 'Last Name'))}}</div>
</div>

<div class="row">
	<div class="small-6 columns">{{Form::text('phone', '', array('placeholder' => 'Phone'))}}</div>
	<div class="small-6 columns">{{Form::text('email', '', array('placeholder' => 'E-mail'))}}</div>
</div>


<div class="row">
	<div class="small-6 columns">{{Form::text('street1', '', array('placeholder' => 'Street Address'))}}</div>
	<div class="small-6 columns">{{Form::text('street2', '', array('placeholder' => 'Street Address (apt, ste, etc.)'))}}</div>
</div>


<div class="row">		
	<div class="small-6 columns">{{Form::text('city', '', array('placeholder' => 'City'))}}</div>
	
	<div class="small-3 columns">{{Form::text('state', '', array('placeholder' => 'State'))}}</div>
	<div class="small-3 columns">{{Form::text('zip', '', array('placeholder' => 'Zip Code'))}}</div>
</div>

<div class="row">
	
	<div class="small-1 columns"><span class="icon-facebook"></span></div>
		<div class="small-5 columns">{{Form::text('facebook', '', array('placeholder' => 'Paste Facebook link here'))}}</div>
	
	<div class="small-1 columns"><span class="icon-twitter"></span></div>
		<div class="small-5 columns">{{Form::text('twitter', '', array('placeholder' => 'Paste Twitter link here'))}}</div>
</div>

<div class="row">	
	<div class="small-1 columns"><span class="icon-instagram"></span></div>	
		<div class="small-5 columns">{{Form::text('instagram', '', array('placeholder' => 'Paste IG link here'))}}</div>
	<div class="small-1 columns"><span class="icon-globe"></span></div>		
		<div class="small-5 columns">{{Form::text('website', '', array('placeholder' => 'Pase Website link here'))}}</div>


</div>

<div class="row">
	{{Form::textarea('notes', '', array('placeholder' => 'Notes'))}}
</div>
<br>


<button type="submit" class="btn-large btn-inverse">Create New Contact</button>

{{Form::close()}}



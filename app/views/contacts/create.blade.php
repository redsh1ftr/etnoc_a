{{Form::open(array('route' => 'contacts.create', 'method' => 'post', 'files' => 'true'))}}

<div class="row">
		<div class="small-6 columns"><div style="color:#000000">
			<select><option>Choose Contact Type..GENERATE FROM LISTTTTTT..</option>
			<option value="ARTIST">Artist</option>
			<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="small-6 columns">{{Form::text('nickname', '', array('placeholder' => 'Alias'))}}</div>
</div>






<br>
<div class="row">
	<div class="small-6 columns"></div>
</div>



<div class="row">
	<div class="small-6 columns"></div>
	<div class="small-6 columns"></div>
</div>






<div class="row">
	<div class="small-6 columns">{{Form::text('fname', '', array('placeholder' => 'First Name'))}}</div>
	<div class="small-6 columns">{{Form::text('lname', '', array('placeholder' => 'Last Name'))}}</div>
</div>

<div class="row">
	<div class="small-6 columns">{{Form::text('phone', '', array('placeholder' => 'Phone'))}}</div>
	<div class="small-6 columns">{{Form::text('email', '', array('placeholder' => 'E-mail'))}}</div>
</div>


<div class="row">
	<div class="small-6 columns">{{Form::text('phone', '', array('placeholder' => 'Phone'))}}</div>
	<div class="small-6 columns"></div>
</div>








{{Form::text('phone', '', array('placeholder' => 'Phone'))}}
{{Form::text('', '', array('placeholder' => ''))}}
{{Form::text('', '', array('placeholder' => ''))}}
{{Form::text('', '', array('placeholder' => ''))}}
{{Form::text('', '', array('placeholder' => ''))}}
{{Form::text('', '', array('placeholder' => ''))}}



{{Form::close()}}

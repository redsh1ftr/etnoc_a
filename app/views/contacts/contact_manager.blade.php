<div class="row">
	<div class="large-6 columns" style="color:#000000">
			
			{{Form::open(array('route' => 'contactSearch', 'method' => 'post'))}}

			<select name="type"> 
				<option value="f_name">First Name</option>
				<option value="nickname">Alias</option>
				<option value="l_name">Last Name</option>

			</select>

			{{Form::text('search')}}
			{{Form::submit('Find Contact...')}}
			{{Form::close()}}
	</div>

	<div class="large-6 columns" style="text-align:left;">
		<a href="{{URL::route('contacts.index')}}" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-home"></i> All Contacts</a><br>
		<a href="#" data-reveal-id="newContact" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i><i class="fi-torsos-all"></i> New Contact</a>

	</div>

</div>

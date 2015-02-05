<h1>Contact Manager</h1>
<br>
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

	<div class="large-6 columns">
		<a href="#" data-reveal-id="newContact" class="btn-large btn-inverse">New Contact</a><br>
	</div>
</div>
</div>
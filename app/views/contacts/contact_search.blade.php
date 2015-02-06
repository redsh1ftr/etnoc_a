<div class="row">
	<div class="large-12 columns" style="color:#000000">
			
			{{Form::open(array('route' => 'contactSearch', 'method' => 'post'))}}

			<select name="type"> 
				<option value="f_name">Search byFirst Name</option>
				<option value="nickname">Alias</option>
				<option value="l_name">Last Name</option>

			</select>

			{{Form::text('search')}}
			<button  class="fi-magnifying-glass" type="submit" style="color:#700000;background-color:#000000;font-size:30px"></button>
			{{Form::close()}}
	</div>


</div>

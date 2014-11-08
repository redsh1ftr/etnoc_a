<table>

{{ Form::open(array('action' => 'ProductsController@store', 'files' => true)) }}

<td width="150px">{{ Form::text('name', '', array('placeholder' => 'Name')) }}<tr>
</table>

<br><br>
<table>

<th>{{Form::label('sizes', 'Available Sizes:')}}</th><tr>


<td>X-Small
		<td>{{Form::text('xsmall', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xsmall_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xsmall_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Small
		<td>{{Form::text('small', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('small_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('small_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Medium
		<td>{{Form::text('medium', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('medium_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('medium_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>Large
		<td>{{Form::text('large', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('large_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('large_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>X-Large		
		<td>{{Form::text('xlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>XX-Large		
		<td>{{Form::text('xxlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xxlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xxlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>


<td>XXX-Large		
		<td>{{Form::text('xxxlarge', '', array('placeholder' => 'Quantity...(if available)'))}}
			<td>{{Form::text('xxxlarge_price', '', array('placeholder' => 'Price...'))}}
			<td>{{Form::text('xxxlarge_cost', '', array('placeholder' => 'Cost...'))}}<tr>
		
		
			
</table>

<br><br>
<table>
<td>{{Form::label('description', 'Description')}}<td>{{ Form::textarea('description') }}
</table>
<br><br>

{{Form::submit('create Product')}}

{{Form::close()}}

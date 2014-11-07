<table>

{{ Form::open(array('action' => 'ProductsController@store', 'files' => true)) }}

<td width="150px">{{Form::label('name', 'Name')}} <td>{{ Form::text('name') }}<tr>
</table>


<table>

<td>{{Form::label('sizes', 'Available Sizes')}}



		<td>{{Form::checkbox('xsmall', '1')}}X-Small
		<td>{{Form::checkbox('small', '1')}}Small
		<td>{{Form::checkbox('medium', '1')}}Medium
		<td>{{Form::checkbox('large', '1')}}Large
		<td>{{Form::checkbox('xlarge', '1')}}X-Large
		<td>{{Form::checkbox('xxlarge', '1')}}XX-Large
		<td>{{Form::checkbox('xxxlarge', '1')}}XXX-Large
		<tr>
			
</table>
<table>
<td>{{Form::label('description', 'Description')}}<td>{{ Form::textarea('description') }}
</table>
<br><br>
{{Form::submit('create Product')}}

{{Form::close()}}

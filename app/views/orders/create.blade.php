{{Form::open(array('route' => 'orders.create', 'method' => 'post', 'files' => 'true'))}}

{{ Form::text('name', '', array('placeholder' => 'Name the Order')) }}

<button type="submit" class="btn-large btn-inverse">{{"Create New Order"}}</button>

{{Form::close()}}
{{Form::open(array('route' => 'event_locations.create', 'method' => 'post', 'files' => 'true'))}}

{{Form::text('name', '', array('placeholder' => 'Venue Name'))}}
{{Form::text('contact_name')}}

{{Form::submit()}}

{{Form::close()}}
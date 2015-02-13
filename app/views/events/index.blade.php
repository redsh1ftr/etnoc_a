

@foreach(Shows::get() as $event)

	{{link_to_route('events.edit', $event->name, $event->id)}}

@endforeach




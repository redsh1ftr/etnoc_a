



<div class="maincon">

	<div class="left">

		@foreach($contacts as $contact)

			{{$contact->fname}}<br>

		@endforeach

	</div>

		<div class="right">

			{{View::make('contacts.create')}}

		
	</div>

</div>


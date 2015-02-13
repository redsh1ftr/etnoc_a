<?php

class EventLocation extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	'contact_id',
	'email',
	'phone',
	'fax',
	'street_1',
	'street_2',
	'city',
	'state',
	'zip',
	'website',
	'facebook',
	'twitter',
	'instagram',
	'image_1',
	'image_2',
	'image_3',
	];

	protected $table = 'event_locations';

}
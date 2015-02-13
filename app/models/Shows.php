<?php

class Shows extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'event_name',
	'description',
	'contact_id',  
	'start_date',  
	'end_date',  
	'event_description',  
	'event_logo_image_1',  
	'event_logo_image_2',  
	'facebook',

	];

	protected $table = 'events';
}
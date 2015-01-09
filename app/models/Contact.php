<?php

class Contact extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'type',
	'f_name',
	'l_name',
	'nickname',
	'email',
	'phone',
	'street1',
	'street2',
	'city',
	'state',
	'zip',
	'facebook',
	'twitter',
	'instagram',
	'linkedin',
	'website',
	'notes',
	];


	protected $table = 'contacts';


	public function lastName(){
		$lastname = Contact::orderBy('l_name')->get();

		return($lastname);
	}
}
<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	

	protected $table = 'products';





	public function inventoryCheck(){

		return Inventory::where('item_id', $this->id)->get();
	}
	




}
<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	

	protected $table = 'products';





	public function inventoryCheck($size){

		return Inventory::where('item_id', $this->id)->pluck($size);
	}
	

	public function priceCheck($size){

		return Price::where('item_id', $this->id)->pluck($size);
	}
	

	public function costCheck($size){

		return Cost::where('item_id', $this->id)->pluck($size);
	}

	public function sizeList(){

		return Size::lists('size');
	}



}
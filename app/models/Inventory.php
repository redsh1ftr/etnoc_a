<?php

class Inventory extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];






	protected $table = 'inventories';





	public function product(){

		return Product::where('id', $this->item_id)->get();
	}

}
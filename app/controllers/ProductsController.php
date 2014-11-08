<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();

		return View::make('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new product
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created product in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$prod = new Product;

		$prod->name = Input::get('name');
		$prod->description = Input::get('description');

		$prod->save();

		$item_id = $prod->id;

		$inv = new Inventory;

		$inv->item_id = $item_id;
		$inv->xsmall = Input::get('xsmall');
		$inv->small = Input::get('small');
		$inv->medium = Input::get('medium');
		$inv->large = Input::get('large');
		$inv->xlarge = Input::get('xlarge');
		$inv->xxlarge = Input::get('xxlarge');
		$inv->xxxlarge = Input::get('xxxlarge');

		$inv->save();



		$cost = new Cost;

		$cost->item_id = $item_id;
		$cost->xsmall = Input::get('xsmall_cost');
		$cost->small = Input::get('small_cost');
		$cost->medium = Input::get('medium_cost');
		$cost->large = Input::get('large_cost');
		$cost->xlarge = Input::get('xlarge_cost');
		$cost->xxlarge = Input::get('xxlarge_cost');
		$cost->xxxlarge = Input::get('xxxlarge_cost');

		$cost->save();





		$price = new Price;

		$price->item_id = $item_id;
		$price->xsmall = Input::get('xsmall_price');
		$price->small = Input::get('small_price');
		$price->medium = Input::get('medium_price');
		$price->large = Input::get('large_price');
		$price->xlarge = Input::get('xlarge_price');
		$price->xxlarge = Input::get('xxlarge_price');
		$price->xxxlarge = Input::get('xxxlarge_price');

		$price->save();




		return Redirect::route('products.index');
	
	}

	/**
	 * Display the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	

		$inv = Inventory::all();
		$cost = Cost::all();
		$price = Price::all();

		return View::make('products.show', compact('inv', 'cost', 'price'))
		->with('product', $id);
	}

	/**
	 * Show the form for editing the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);

		return View::make('products.edit', compact('product'));

	}

	/**
	 * Update the specified product in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$product->update($data);

		return Redirect::route('products.index');
	}

	/**
	 * Remove the specified product from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Product::destroy($id);

		return Redirect::route('products.index');
	}

}

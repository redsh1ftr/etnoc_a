<?php

class OrderItemsController extends \BaseController {

	/**
	 * Display a listing of orderitems
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderitems = Orderitem::all();

		return View::make('orderitems.index', compact('orderitems'));
	}

	/**
	 * Show the form for creating a new orderitem
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderitems.create');
	}

	/**
	 * Store a newly created orderitem in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderitem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderitem::create($data);

		return Redirect::route('orderitems.index');
	}

	/**
	 * Display the specified orderitem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderitem = Orderitem::findOrFail($id);

		return View::make('orderitems.show', compact('orderitem'));
	}

	/**
	 * Show the form for editing the specified orderitem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderitem = Orderitem::find($id);

		return View::make('orderitems.edit', compact('orderitem'));
	}

	/**
	 * Update the specified orderitem in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderitem = Orderitem::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderitem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderitem->update($data);

		return Redirect::route('orderitems.index');
	}

	/**
	 * Remove the specified orderitem from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderitem::destroy($id);

		return Redirect::route('orderitems.index');
	}

}

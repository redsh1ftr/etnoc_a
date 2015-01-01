<?php

class MerchexpensesController extends \BaseController {

	/**
	 * Display a listing of merchexpenses
	 *
	 * @return Response
	 */
	public function index()
	{
		$merchexpenses = Merchexpense::all();

		return View::make('merchexpenses.index', compact('merchexpenses'));
	}

	/**
	 * Show the form for creating a new merchexpense
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('merchexpenses.create');
	}

	/**
	 * Store a newly created merchexpense in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Merchexpense::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Merchexpense::create($data);

		return Redirect::route('merchexpenses.index');
	}

	/**
	 * Display the specified merchexpense.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$merchexpense = Merchexpense::findOrFail($id);

		return View::make('merchexpenses.show', compact('merchexpense'));
	}

	/**
	 * Show the form for editing the specified merchexpense.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$merchexpense = Merchexpense::find($id);

		return View::make('merchexpenses.edit', compact('merchexpense'));
	}

	/**
	 * Update the specified merchexpense in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$merchexpense = Merchexpense::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Merchexpense::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$merchexpense->update($data);

		return Redirect::route('merchexpenses.index');
	}

	/**
	 * Remove the specified merchexpense from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Merchexpense::destroy($id);

		return Redirect::route('merchexpenses.index');
	}

}

<?php

class ContactTypesController extends \BaseController {

	/**
	 * Display a listing of contacttypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$contact_types = Contacttype::all();

		return View::make('contact_types.index', compact('contact_types'));
	}

	/**
	 * Show the form for creating a new contacttype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contact_types.create');
	}

	/**
	 * Store a newly created contacttype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Contacttype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Contacttype::create($data);

		return Redirect::route('contact_types.index');
	}

	/**
	 * Display the specified contacttype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contacttype = Contacttype::findOrFail($id);

		return View::make('contact_types.show', compact('contacttype'));
	}

	/**
	 * Show the form for editing the specified contacttype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contacttype = Contacttype::find($id);

		return View::make('contact_types.edit', compact('contacttype'));
	}

	/**
	 * Update the specified contacttype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contacttype = Contacttype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Contacttype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$contacttype->update($data);

		return Redirect::route('contact_types.index');
	}

	/**
	 * Remove the specified contacttype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Contacttype::destroy($id);

		return Redirect::route('contact_types.index');
	}

}

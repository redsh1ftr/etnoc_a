<?php

class MerchincomesController extends \BaseController {

	/**
	 * Display a listing of merchincomes
	 *
	 * @return Response
	 */
	public function index()
	{
		$merchincomes = Merchincome::all();

		return View::make('merchincomes.index', compact('merchincomes'));
	}

	/**
	 * Show the form for creating a new merchincome
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('merchincomes.create');
	}

	/**
	 * Store a newly created merchincome in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Merchincome::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Merchincome::create($data);

		return Redirect::route('merchincomes.index');
	}

	/**
	 * Display the specified merchincome.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$merchincome = Merchincome::findOrFail($id);

		return View::make('merchincomes.show', compact('merchincome'));
	}

	/**
	 * Show the form for editing the specified merchincome.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$merchincome = Merchincome::find($id);

		return View::make('merchincomes.edit', compact('merchincome'));
	}

	/**
	 * Update the specified merchincome in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$merchincome = Merchincome::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Merchincome::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$merchincome->update($data);

		return Redirect::route('merchincomes.index');
	}

	/**
	 * Remove the specified merchincome from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Merchincome::destroy($id);

		return Redirect::route('merchincomes.index');
	}

}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

///// MODEL ROUTES

Route::model('product', 'Product');

Route::model('inventory', 'Inventory');

//// RESOURCES

Route::resource('administrator', 'AdministratorsController');

Route::resource('picture', 'PicturesController');

Route::resource('band', 'BandsController');

Route::resource('events', 'EventsController');

Route::resource('contact_types', 'ContactTypesController');

Route::resource('customers', 'CustomersController');

Route::resource('products', 'ProductsController');

Route::resource('events', 'EventsController');

Route::resource('inventory', 'InventoriesController');

Route::resource('contacts', 'ContactsController');
Route::post('/contact/search', array('as' => 'contactSearch', 'uses' => 'ContactsController@show'));

Route::resource('orders', 'OrdersController');

Route::resource('event_locations', 'EventlocationsController');
Route::post('/venue/search', array('as' => 'venueSearch', 'uses' => 'EventLocationsController@show'));

////// RANDOM ROUTES

Route::get('/productmanager', array('as' => 'product_list', 'uses' => 'ProductsController@productmanager'));



Route::get('/sales', function()
{
	return View::make('sales');
});


Route::get('/3quarter', function()
{
	return View::make('3quarter');
});


Route::get('/accessories', function()
{
	return View::make('accessories');
});


Route::get('/hoodies', function()
{
	return View::make('hoodies');
});



Route::get('/tanks', function()
{
	return View::make('tank_t');
});


Route::get('/all', function()
{
	return View::make('all');
});

Route::get('/tryshit', function(){

	return View::make('products.index');
});


Route::get('/saddle', function()
{
	return View::make('saddle');
});




Route::get('/list/products/{type}', array('as' => 'type_sort', 'uses' => 'ProductsController@type'));








Route::get('eloquent', function() {


		$product = Product::all();

		return View::make('products.index')

		->with('products', compact('product'))
		;

			// all the bears (will also return the fish, trees, and picnics that belong to them)

	});

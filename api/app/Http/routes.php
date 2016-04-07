<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
	product api
*/
Route::group([], function() {  //'middleware' => ''
	// api return list product
	Route::get('/products', [
		'as' => 'products.index',
		'uses' => 'ProductsController@index'
		]);
	// sample epxort
	Route::get('/products/export', [
		'as' => 'products.export',
		'uses' => 'ProductsController@export'
		]);

	Route::get('/products/example', [
		'as' => 'example.export',
		'uses' => 'ExampleController@exportUserList'
		]);

	// return product data have id
	Route::get('/products/{id}', [
		'as' => 'products.show',
		'uses' => 'ProductsController@show'
		]);

	Route::get('/products/{id}/update', [
		'as' => 'products.edit',
		'uses' => 'ProductsController@edit'
		]);

	Route::post('/products/{id}/update', [
		'as' => 'products.update',
		'uses' => 'ProductsController@update'
		]);

	Route::get('/products/create/classify', [
		'as' => 'products.createClassify',
		'uses' => 'ProductsController@createClassify'
		]);	

	Route::post('/products/create/classify', [
		'as' => 'products.storeClassify',
		'uses' => 'ProductsController@storeClassify'
		]);	

	Route::get('/products/create/details/{categoryId}', [
		'as' => 'products.createDetails',
		'uses' => 'ProductsController@createDetails'
		]);

	Route::post('/products/create/details', [
		'as' => 'products.storeDetails',
		'uses' => 'ProductsController@storeDetails'
		]);

	Route::get('/products/import', [
		'as' => 'products.import',
		'uses' => 'ProductsController@import'
		]);

	Route::post('/products/import/update', [
		'as' => 'products.importUpdate',
		'uses' => 'ProductsController@importUpdate'
		]);

	Route::post('/products/import/insert', [
		'as' => 'products.importInsert',
		'uses' => 'ProductsController@importInsert'
		]);
});


/*
	product api
*/
Route::group([], function() {  //'middleware' => ''
	Route::post('/exports', [
		'as' => 'exports.index',
		'uses' => 'ExportsController@index'
		]);

	Route::get('/exports', [
		'as' => 'exports.index',
		'uses' => 'ExportsController@index'
		]);
});



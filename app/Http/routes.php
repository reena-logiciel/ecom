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



//Route::get('login', 'Auth\AuthController@getLogin');
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

Route::group(['middleware' => 'auth'], function() {


	Route::group(array('prefix' => 'admin'), function()	{
    	Route::get('categories/index', ['as' => 'categories.index', 'uses' => 'Admin\CategoriesController@index']);
    	Route::get('category/add', ['as' => 'category.add', 'uses' => 'Admin\CategoriesController@add']);
    	Route::post('category/store', ['as' => 'category.store', 'uses' => 'Admin\CategoriesController@store']);
    	Route::get('category/edit/{id}', ['as' => 'category.edit', 'uses' => 'Admin\CategoriesController@edit'])->where('id', '[0-9]+');
		Route::post('category/update', ['as' => 'category.update', 'uses' => 'Admin\CategoriesController@update']);
		Route::delete('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'Admin\CategoriesController@destroy']);

		Route::get('products/index', ['as' => 'products.index', 'uses' => 'Admin\ProductsController@index']);
    	Route::get('product/add', ['as' => 'product.add', 'uses' => 'Admin\ProductsController@add']);
    	Route::post('product/store', ['as' => 'product.store', 'uses' => 'Admin\ProductsController@store']);
    	Route::get('product/edit/{id}', ['as' => 'product.edit', 'uses' => 'Admin\ProductsController@edit'])->where('id', '[0-9]+');
		Route::post('product/update', ['as' => 'product.update', 'uses' => 'Admin\ProductsController@update']);
		Route::delete('product/delete/{id}', ['as' => 'product.delete', 'uses' => 'Admin\ProductsController@destroy']);
	
		Route::get('logout', ['as'=>'logout','uses' => 'Auth\AuthController@getLogout']);
	});

	

	Route::get('home', function() {
		$user = \Auth::user();
		echo $user->name;
	});
	
	
});

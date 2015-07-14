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
Route::get('login', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::post('login', ['as'=>'login', 'uses'=>'Auth\AuthController@postLogin']);

Route::get('home', ['as'=>'home','uses' => 'HomeController@index']);

Route::group(['middleware' => 'auth'], function() {

	Route::group(['prefix' => 'admin'], function()	{

		Route::group(['namespace' => 'Admin'], function()	{	

	    	 Route::get('categories/index', ['as' => 'categories.index', 'uses' => 'CategoriesController@index']);
	    	Route::get('category/add', ['as' => 'category.add', 'uses' => 'CategoriesController@add']);
	    	Route::post('category/store', ['as' => 'category.store', 'uses' => 'CategoriesController@store']);
	    	Route::get('category/edit/{id}', ['as' => 'category.edit', 'uses' => 'CategoriesController@edit'])->where('id', '[0-9]+');
			Route::post('category/update', ['as' => 'category.update', 'uses' => 'CategoriesController@update']);
			Route::delete('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'CategoriesController@destroy']);
				

			/* Route::resource('categories', 'CategoriesController'); */

			Route::get('products/index', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
	    	Route::get('product/add', ['as' => 'product.add', 'uses' => 'ProductsController@add']);
	    	Route::post('product/store', ['as' => 'product.store', 'uses' => 'ProductsController@store']);
	    	Route::get('product/edit/{id}', ['as' => 'product.edit', 'uses' => 'ProductsController@edit'])->where('id', '[0-9]+');
			Route::post('product/update', ['as' => 'product.update', 'uses' => 'ProductsController@update']);
			Route::delete('product/delete/{id}', ['as' => 'product.delete', 'uses' => 'ProductsController@destroy']);
	
		
		});

		Route::get('logout', ['as'=>'logout','uses' => 'Auth\AuthController@getLogout']);
	});
	
	/* Route::get('home', function() {
		$user = \Auth::user();
		echo $user->name;
	}); */
	
	Route::post('cart/add/{id}', ['as'=>'cart.add','uses' => 'CartController@add'])->where('id', '[0-9]+');
	
});

<?php

use App\Products;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	$products = Products::all();
        
    return view('index')->with("products", $products);
});

Route::get('/panel', function(){

	return view('panel');
});

Route::get('/login', function() {

	if(Auth::check())
	{
		return redirect('/panel');
	}
	else
	{
		return view('login');
	}
});

Route::get('/register', function() {
	return view('register');
});

Route::post('/logins', 'LoginController@signin');
Route::get('/logout', 'LoginController@logout');
Route::post('signup', 'LoginController@signup');

Route::resource('products', 'ProductsController');
Route::get('products/{id}/delete', 'ProductsController@destroy');
Route::post('products/{id}/update', 'ProductsController@update');

Route::get('cart/{id}/addItem', "CartController@addItem");
Route::get('ItemsCart', 'CartController@index');
Route::get('cart/{id}/delete', 'CartController@destroy');

Route::resource('points', 'PointsController');
Route::post('points/{id}/update', 'PointsController@update');
Route::get('points/{id}/delete', 'PointsController@destroy');

Route::get('purchase', 'CartController@show');
Route::post('purchase/cart', 'CartController@confirmPurchase');
Route::get('ventas', 'CartController@ventas');
Route::get('pedidos/{id}/product', "CartController@pedido");
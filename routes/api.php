<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('administrator', 'App\Http\Controllers\AdministratorController@index');
// Route::get('administrator/{id}/user', 'App\Http\Controllers\AdministratorController');
// Route::get('client/{id}/user', 'App\Http\Controllers\ClientController');
// Route::get('product/{id}/user', 'App\Http\Controllers\ProductController');
// Route::get('seller/{id}/user', 'App\Http\Controllers\SellerController');
// Route::get('shopping_cart/{id}/user', 'App\Http\Controllers\ShoppingCartController');
// Route::get('purchase_order/{id}/user', 'App\Http\Controllers\PurchaseOrderController');

Route::get('user/{id}/administrator', 'App\Http\Controllers\Api\UserController@administrator');
Route::get('user/{id}/seller', 'App\Http\Controllers\Api\UserController@seller');
Route::get('user/{id}/client', 'App\Http\Controllers\Api\UserController@client');
Route::apiResource('user', 'App\Http\Controllers\Api\UserController');

Route::get('administrators/{id}/user', 'App\Http\Controllers\Api\AdministratorController@user');
Route::apiResource('administrator', 'App\Http\Controllers\Api\AdministratorController');

Route::get('seller/{id}/user', 'App\Http\Controllers\Api\SellerController@user');
Route::apiResource('seller', 'App\Http\Controllers\Api\SellerController');

Route::get('client/{id}/user', 'App\Http\Controllers\Api\ClientController@user');
Route::get('client/{id}/shoppingCart', 'App\Http\Controllers\Api\ClientController@shoppingCart');
Route::apiResource('client', 'App\Http\Controllers\Api\ClientController');

Route::get('categories/{id}/products', 'App\Http\Controllers\Api\CategoriesController@products');
Route::apiResource('category', 'App\Http\Controllers\Api\CategoriesController');

// Route::get('product', 'App\Http\Controllers\Api\ProductController');
Route::apiResource('product', 'App\Http\Controllers\Api\ProductController');

Route::get('shopping_cart/{id}/client', 'App\Http\Controllers\Api\ShoppingCartController@client');
Route::apiResource('shopping_cart', 'App\Http\Controllers\Api\ShoppingCartController');

Route::get('purchase_order/{id}/client', 'App\Http\Controllers\Api\PurchaseOrderController@client');
Route::apiResource('purchase_order', 'App\Http\Controllers\Api\PurchaseOrderController');

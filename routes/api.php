<?php

use Illuminate\Support\Facades\Route;

Route::middleware('jwt.auth')->group(function() {

    // Rota para Usuários
    Route::get('user/{id}/administrator', 'App\Http\Controllers\Api\UserController@administrator');
    Route::get('user/{id}/seller', 'App\Http\Controllers\Api\UserController@seller');
    Route::get('user/{id}/client', 'App\Http\Controllers\Api\UserController@client');
    Route::apiResource('user', 'App\Http\Controllers\Api\UserController');

    // Rota para Administradores
    Route::get('administrators/{id}/user', 'App\Http\Controllers\Api\AdministratorController@user');
    Route::apiResource('administrator', 'App\Http\Controllers\Api\AdministratorController');

    // Rota para Vendedores
    Route::get('seller/{id}/user', 'App\Http\Controllers\Api\SellerController@user');
    Route::apiResource('seller', 'App\Http\Controllers\Api\SellerController');

    // Rota para Clientes
    Route::get('client/{id}/user', 'App\Http\Controllers\Api\ClientController@user');
    Route::get('client/{id}/shoppingCart', 'App\Http\Controllers\Api\ClientController@shoppingCart');
    Route::apiResource('client', 'App\Http\Controllers\Api\ClientController');

    // Rota para Categorias
    Route::get('categories/{id}/products', 'App\Http\Controllers\Api\CategoriesController@products');
    Route::apiResource('category', 'App\Http\Controllers\Api\CategoriesController');

    // Rota para Produtos
    // Route::get('product', 'App\Http\Controllers\Api\ProductController');
    Route::apiResource('product', 'App\Http\Controllers\Api\ProductController');

    // Rota para Carrinho de compras
    Route::get('shopping_cart/{id}/client', 'App\Http\Controllers\Api\ShoppingCartController@client');
    Route::get('shopping_cart/{id}/items', 'App\Http\Controllers\Api\ShoppingCartController@items');
    Route::apiResource('shopping_cart', 'App\Http\Controllers\Api\ShoppingCartController');

    // Rota para items do Carrinho de compras
    Route::get('shopping_cart_items/{id}/shoppingCart', 'App\Http\Controllers\Api\ShoppingCartItemsController@shoppingCart');
    Route::apiResource('shopping_cart_items', 'App\Http\Controllers\Api\ShoppingCartItemsController');

    // Rota para Pedido de compra
    Route::get('purchase_order/{id}/items', 'App\Http\Controllers\Api\PurchaseOrderController@items');
    Route::apiResource('purchase_order', 'App\Http\Controllers\Api\PurchaseOrderController');

    // Rota para items do Pedido de compra
    Route::get('purchase_order_items/{id}/purchaseOrder', 'App\Http\Controllers\Api\PurchaseOrderItemsController@purchaseOrder');
    Route::apiResource('purchase_order_items', 'App\Http\Controllers\Api\PurchaseOrderItemsController');
});

Route::post('login', 'App\Http\Controllers\Auth\AuthenticateController@authenticate');
Route::get('me', 'App\Http\Controllers\Auth\AuthenticateController@getAuthenticatedUser');
Route::post('login-refresh', 'App\Http\Controllers\Auth\AuthenticateController@refreshToken');
Route::post('logout', 'App\Http\Controllers\Auth\AuthenticateController@logout');

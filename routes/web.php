<?php
Auth::routes();

Route::get('auth/shopify', 'Auth\LoginShopifyController@redirectToProvider')->name('shopify.login');
Route::get('auth/shopify/callback', 'Auth\LoginShopifyController@handleProviderCallback')->name('shopify.callback');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

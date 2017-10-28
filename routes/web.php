<?php

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

Route::get('/', 'PivotController@getShopProduct');
Route::post('/save-shop', 'PivotController@postShop')->name('postShop');

//route group
Route::group(['prefix' => 'admin'], function(){
    Route::get('/sign-in', function(){
        return 'sign me in';
    });
    Route::get('/sign-out', function(){
        return 'sign me out';
    });
    route::get('/testing-shit', function(){
    	return "holy";
    });
});

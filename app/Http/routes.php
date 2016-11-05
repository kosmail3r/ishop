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

Route::get('/', ['as' => 'main', 'uses' => 'MainController@indexAction']);
Route::get('/index/', 'MainController@indexAction');
Route::get('/good/{id}', 'MainController@goodAction');
Route::get('/shop/', 'MainController@shopAction');
Route::post('/shop/', 'MainController@searchAction');
Route::get('/checkout/', 'BasketController@show');
Route::post('/checkout/', 'OrderController@orderAction');

Route::get('/category/{id}', 'MainController@categoryAction');
Route::post('/category/{id}', 'MainController@searchAction');
Route::get('/category/good/{id}', 'MainController@goodAction');
Route::post('/category/good/{id}', 'MainController@addComment');
Route::post('good/{id}', 'MainController@addComment');

Route::get('/shoptest/', 'MainController@shoptestAction');
Route::auth();
Route::get('/adminzone', 'AdminController@adminAction');
Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'api.v1'], function () {
    Route::get('/good/{id}', 'ApiController@goodAction');
    Route::get('/goods/', 'ApiController@allGoodsAction');
    Route::get('/good/category/{id}', 'ApiController@byCategoryAction');
    Route::get('/users/', 'ApiController@usersAction');
    Route::post('/orders/', 'ApiController@orderAction');
    Route::delete('/orders/{id}', 'ApiController@orderCancellation');
});

Route::group(['prefix' => 'adminzone'], function () {
    Route::get('/main', 'AdminController@adminAction');
    //          Разделы
    Route::get('/categories', 'AdminController@categoriesAction');
    Route::post('/categories/', 'AdminController@categoryAdd');
    Route::get('/categories/{id}', 'AdminController@categoryAction');
    Route::post('/categories/{id}', 'AdminController@categoryUpdate');
    //          пользователи
    Route::get('/users/', 'AdminController@userAction');
    Route::post('/users/', 'AdminController@userCreate');
    Route::get('/user/{id}', 'AdminController@userEdit');
    Route::post('/user/{id}', 'AdminController@userUpdate');
    //          товары
    Route::get('/goods/', 'AdminController@goodsAction');
    Route::post('/goods/', 'AdminController@goodCreate');
    Route::get('/good/{id}', 'AdminController@goodEdit');
    Route::post('/good/{id}', 'AdminController@goodUpdate');
    //          заказы
    Route::get('/orders/', 'AdminController@ordersAction');
    Route::get('/order/{id}', 'AdminController@orderView');

});



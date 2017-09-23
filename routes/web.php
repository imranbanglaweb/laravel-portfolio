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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','welcomeController@index');
Auth::routes();

Route::get('/dashboard','HomeController@index');




Route::group(['middleware'=>'AuthenticateMidleware'],function(){
	// categories
Route::get('/category/add','CategoryController@category');

Route::get('/category/all','CategoryController@categoryList');

Route::get('/addcategory','CategoryController@addCategory');

Route::post('/category/save','CategoryController@storeCategory');

Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/update','CategoryController@update');
Route::get('/category/delete/{id}','CategoryController@delete');

// User 
Route::get('/user/add','UserController@User');

Route::post('/user/save', 'UserController@storeUser');

Route::get('/user/all','UserController@UserList');

Route::get('/adduser','UserController@addUser');

Route::get('/user/edit/{id}','UserController@edit');

Route::post('/user/update','UserController@update');

Route::get('/user/del/{id}','UserController@delete');


// Portfolio
Route::get('/Portfolio/add','PortfolioController@add');
Route::post('/Portfolio/create','PortfolioController@create');
Route::get('/Portfolio/all','PortfolioController@show');
Route::get('/Portfolio/edit/{id}', 'PortfolioController@edit');
Route::post('/Portfolio/update','PortfolioController@update');
Route::get('/Portfolio/delete/{id}','PortfolioController@delete');

Route::get('/User-Profile','UserProfileController@show');

// Products
Route::get('/Products/add','ProductsController@index');
Route::post('/Products/save','ProductsController@create');
Route::get('/Products/all','ProductsController@show');

// Pages
Route::get('/page/add','PageController@Addpage');
Route::post('/page/save','PageController@create');
Route::get('/page/all','PageController@show');
Route::get('/page/edit/{id}','PageController@edit');
Route::post('/page/update','PageController@update');
Route::get('/page/delete/{id}','PageController@delete');

});
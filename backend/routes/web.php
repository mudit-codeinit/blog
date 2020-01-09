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
Route::group(["namespace" => "Admin" , "prefix" => "admin"], function(){

Route::get('/', 'IndexController@index');
Route::post('login', 'IndexController@postLogin');
Route::get('logout', 'IndexController@logout');
 Route::get('dashboard', 'DashboardController@index');
 Route::get('users', 'UsersController@index');
 Route::get('category', 'CategoryController@index');
//***********************************Category********************************************/    
 
Route::get('category/addnewcategory', 'CategoryController@addnewcategory');
Route::post('category/addcategory', 'CategoryController@addcategory');
Route::get('category/editcategory/{id}', 'CategoryController@addnewcategory');
Route::get('category/deletecategory/{id}', 'CategoryController@deletecategory');
Route::get('category/status/{id}', 'CategoryController@changestatus');
 
});
Route::get('/', 'HomeController@index');

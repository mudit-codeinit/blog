<?php

use Illuminate\Http\Request;

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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');
Route::get('posts', 'PostController@index');
Route::post('add_post', 'PostController@add_post');
Route::post('delete_post/{id}', 'PostController@delete_post');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

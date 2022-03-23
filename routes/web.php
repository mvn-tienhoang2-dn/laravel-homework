<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/list-user', 'UserController@view')->name('user.list.view');
Route::get('/create-user', 'UserController@index')->name('user.create.index');
Route::post('/create-user', 'UserController@store')->name('user.create.store');
Route::get('/create-comment', 'CommentController@index');
Route::group(['prefix' => '/comments'], function () {
    Route::get('/', 'CommentController@index')->name('user.comment.index');
    Route::get('/{id}/users', 'CommentController@detail')->name('user.comment.detail');
});
Route::group(['prefix' => '/posts'], function () {
    Route::get('/', 'PostController@index')->name('user.post.index');
    Route::get('/{id}/users', 'PostController@show')->name('user.post.show');
});
Route::group(['prefix' => '/users'], function () {
    Route::get('/{id}', 'ProfileController@show')->name('user.profile.show');
    Route::get('/{id}/comments', 'CommentController@show')->name('user.comment.show');
});

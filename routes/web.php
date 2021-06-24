<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/categories','CategoryController')->names('categories');
Route::get('admin/category/{module}','CategoryController@module')->name('categories.module');
Route::resource('admin/subcategories','SubcategoryController')->names('subcategories');
Route::resource('admin/tags','TagController')->names('tags');
Route::resource('admin/posts','PostController')->names('posts');
Route::resource('admin/products','ProductController')->names('products');


Route::post('/comment/store','CommentController@store')->name('comment.add');
Route::post('/reply/store','CommentController@replyStore')->name('reply.add');

Route::delete('/reply/destroy/{comment}','CommentController@destroy')->name('comment.destroy');
Route::get('/reply/{comment}/edit','CommentController@edit')->name('comment.edit');
Route::put('/reply/{comment}','CommentController@update')->name('comment.update');



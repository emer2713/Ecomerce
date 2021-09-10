<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/*Rotes Autentication */
Auth::routes();



/*Rotes Home */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','WebController@index')->name('web.index');

/*Rotes Blog */
Route::get('/blog','WebController@blog')->name('web.blog');
Route::get('/blog/{slug}','WebController@blogDetails')->name('web.blogDetails');

/*Rotes FindByCategories */
Route::get('/categorias/{slug}','WebController@category')->name('web.category');
/*Rotes FindByTags */
Route::get('/etiqueta/{slug}','WebController@tags')->name('web.tags');

/*Rotes Product */
Route::get('/producto/{slug}','WebController@getDetail')->name('detail');
Route::get('/no-encontrado','WebController@notFound')->name('web.notFound');

/*Rotes Cart */
Route::get('/lista-de-deseos','WebController@myWishlist')->name('web.myWishlist');
Route::get('/carrito-de-compras','WebController@shoppingCart')->name('web.shoppingCart');
Route::get('/checkout','WebController@checkout')->name('web.checkout');
Route::get('/rastrea-tu-orden','WebController@trackOrders')->name('web.trackOrders');

/*Rotes Privacity */
Route::get('/terminos-y-condiciones','WebController@termsConditions')->name('web.termsConditions');
Route::get('/contacto','WebController@contact')->name('web.contact');
Route::get('/preguntas-frecuentes','WebController@faq')->name('web.faq');

/*Rotes ComentsBlog */
Route::post('/comment/store','CommentController@store')->name('comment.add');
Route::post('/reply/store','CommentController@replyStore')->name('reply.add');

/*Rotes ComentsProduct */
Route::post('/commentProduct/store','CommentController@productStore')->name('productComment.add');
Route::post('/replyProduct/store','CommentController@productReplyStore')->name('productReply.add');

/*Rotes AdminComents */
Route::delete('/reply/destroy/{comment}','CommentController@destroy')->name('comment.destroy');
Route::get('/reply/{comment}/edit','CommentController@edit')->name('comment.edit');
Route::put('/reply/{comment}','CommentController@update')->name('comment.update');

/*Rotes Validation CheckInQR*/
Route::get('/checkin','UserCheckinController@GetCheckin')->name('checkin');
Route::post('/checkin','UserCheckinController@PostCheckin')->name('checkin');

/*Rotes ProductPurchasedByUser*/
Route::get('/purchased-products','CartCheckinController@GetPurchasedProduct')->name('purchased.products');
Route::post('/purchased-product','CartController@PostPurchasedProduct')->name('purchased.product');
Route::get('/purchased-product/{id}/edit','CartController@GetEditPurchasedProduct')->name('edit.purchased.product');
Route::post('/purchased-product/{id}/edit','CartController@PostEditPurchasedProduct')->name('edit.purchased.product');
Route::get('/purchased-product/{id}/delete','CartController@GetDeletePurchasedProduct')->name('delete.purchased.product');

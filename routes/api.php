<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Facades\Datatables;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('/eliminarimagen/{id}','Api\ProductController@eliminarimagen')->name('api.eliminarimagen');

Route::get('categories', function (){

    $query = App\Category::query()
    ->select([
      'categories.id',
      'categories.name',

    ]);
    return datatables($query)
    ->addColumn('btn','categories.actions')
    ->rawColumns(['btn'])
    ->toJson();
});

<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){


    /*Rotes Administration */
    Route::get('/',                         'HomeController@index')->name('dashboard');
    Route::get('/caja',                     'HomeController@boxe')->name('boxe');
    Route::get('/piso',                     'HomeController@waiter')->name('waiter');
    Route::get('/bar',                      'HomeController@bar')->name('bar');
    Route::get('/cocina',                   'HomeController@kitchen')->name('kitchen');


    //Module BranchOffice
    Route::get('/branchoffices/',                              'BranchofficeController@index')->name('branchoffices');
    Route::get('/branchoffice/add',                            'BranchofficeController@create')->name('branchoffices_add');
    Route::post('/branchoffice/add',                           'BranchofficeController@store')->name('branchoffices_add');
    Route::get('/branchoffice/{id}/edit',                      'BranchofficeController@edit')->name('branchoffices_edit');
    Route::post('/branchoffice/{id}/edit',                     'BranchofficeController@update')->name('branchoffices_edit');
    Route::get('/branchoffice/{id}/delete',                    'BranchofficeController@destroy')->name('branchoffices_delete');

    //Module tables
    Route::get('/tables/',                              'TableController@index')->name('tables');
    Route::get('/table/add',                            'TableController@create')->name('tables_add');
    Route::post('/table/add',                           'TableController@store')->name('tables_add');
    Route::get('/table/{id}/edit',                      'TableController@edit')->name('tables_edit');
    Route::post('/table/{id}/edit',                     'TableController@update')->name('tables_edit');
    Route::get('/table/{id}/delete',                    'TableController@destroy')->name('tables_delete');

    //Module categorie
    Route::get('/categories/',                              'CategoryController@index')->name('categories');
    Route::get('/categorie/add',                            'CategoryController@create')->name('categories_add');
    Route::post('/categorie/add',                           'CategoryController@store')->name('categories_add');
    Route::get('/categorie/{id}/edit',                      'CategoryController@edit')->name('categories_edit');
    Route::post('/categorie/{id}/edit',                     'CategoryController@update')->name('categories_edit');
    Route::get('/categorie/{id}/delete',                    'CategoryController@destroy')->name('categories_delete');
    Route::get('/category/{module}',                        'CategoryController@module')->name('categories.module');

    //Module subcategorie
    Route::get('/subcategories/',                              'SubcategoryController@index')->name('subcategories');
    Route::get('/subcategories/add',                            'SubcategoryController@create')->name('subcategories_add');
    Route::post('/subcategories/add',                           'SubcategoryController@store')->name('subcategories_add');
    Route::get('/subcategorie/{id}/edit',                      'SubcategoryController@edit')->name('subcategories_edit');
    Route::post('/subcategorie/{id}/edit',                     'SubcategoryController@update')->name('subcategories_edit');
    Route::get('/subcategorie/{id}/delete',                    'SubcategoryController@destroy')->name('subcategories_delete');

    //Module tag
    Route::get('/tags/',                              'TagController@index')->name('tags');
    Route::get('/tag/add',                              'TagController@create')->name('tags_add');
    Route::post('/tag/add',                           'TagController@store')->name('tags_add');
    Route::get('/tag/{id}/edit',                      'TagController@edit')->name('tags_edit');
    Route::post('/tag/{id}/edit',                     'TagController@update')->name('tags_edit');
    Route::get('/tag/{id}/delete',                    'TagController@destroy')->name('tags_delete');

    //Module post
    Route::get('/posts/',                              'PostController@index')->name('posts');
    Route::get('/post/add',                             'PostController@create')->name('posts_add');
    Route::post('/post/add',                           'PostController@store')->name('posts_add');
    Route::get('/post/{id}/edit',                      'PostController@edit')->name('posts_edit');
    Route::post('/post/{id}/edit',                     'PostController@update')->name('posts_edit');
    Route::get('/post/{id}/delete',                    'PostController@destroy')->name('posts_delete');
    Route::get('/post/{id}/show',                       'PostController@show')->name('posts_show');

    //Module product
    Route::get('/products/',                              'ProductController@index')->name('products');
    Route::get('/product/add',                           'ProductController@create')->name('products_add');
    Route::post('/product/add',                           'ProductController@store')->name('products_add');
    Route::get('/product/{id}/edit',                      'ProductController@edit')->name('products_edit');
    Route::post('/product/{id}/edit',                     'ProductController@update')->name('products_edit');
    Route::get('/product/{id}/delete',                    'ProductController@destroy')->name('products_delete');
    Route::get('/product/{id}/show',                       'ProductController@show')->name('products_show');

    //Module Carousel
    Route::get('/carousels/',                              'CarouselController@index')->name('carousels');
    Route::get('/carousel/add',                           'CarouselController@create')->name('carousels_add');
    Route::post('/carousel/add',                           'CarouselController@store')->name('carousels_add');
    Route::get('/carousel/{id}/edit',                      'CarouselController@edit')->name('carousels_edit');
    Route::post('/carousel/{id}/edit',                     'CarouselController@update')->name('carousels_edit');
    Route::get('/carousel/{id}/delete',                    'CarouselController@destroy')->name('carousels_delete');

    //Module Users
    Route::get('/users/{status}',                           'Admin\UserController@getUsers')->name('user_list');
    Route::get('/user/{id}/edit',                           'Admin\UserController@getUserEdit')->name('users_edit');
    Route::post('/user/{id}/edit',                          'Admin\UserController@postUserEdit')->name('users_edit');
    Route::get('/user/{id}/banned',                         'Admin\UserController@getUserBanned')->name('users_banned');
    Route::get('/user/{id}/permissions',                    'Admin\UserController@getUserPermissions')->name('users_permissions');
    Route::post('/user/{id}/permissions',                   'Admin\UserController@postUserPermissions')->name('users_permissions');
});

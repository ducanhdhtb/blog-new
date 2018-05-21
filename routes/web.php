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



Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@showPost']);
//login user, admin, vendor,.... customer, account
Route::get('user/login', 'UserController@loginAction');
Route::post('user/loginPost', 'UserController@loginPostAction');

Route::get('post',  'Blog\PostController@listAction')->name('postList');
// Show all posts 
Route::get('post/list',  'Blog\PostController@listAction')->name('postList');
// Show  detail post with url ex: post/view/id/123 and /things-they-say
Route::get('post/view/{id}', 'Blog\PostController@viewAction')->name('postView');
// New post redirect to Edit with flag new ex: post/new
#return view add blog
Route::get('post/new', 'Blog\PostController@newAction')->name('postNew');

# Return view edit.blade.php in post
Route::get('post/edit/{id}', 'Blog\PostController@editAction')->name('postEdit');

// Delete ex :  post/delete/id/123
Route::get('post/delete/{id}', 'Blog\PostController@deleteAction');
// Delete ex :  post/save
Route::post('post/save', ['as' => 'save', 'uses' => 'Blog\PostController@saveAction']);

// Show all category
Route::get('category/list', 'Blog\CategoryController@listAction');
// Show detail category and list post in category
// Ex: category/view/id/123 and /spiralbound

Route::get('category/view', 'Blog\CategoryController@viewAction');
# return view new.blade.php
Route::get('category/new', 'Blog\CategoryController@newAction');
#Take data from  new.blade.php
Route::post('category/new', 'Blog\CategoryController@newActionPost');

#return view category
Route::get('category/edit/{id}', 'Blog\CategoryController@editAction');
#take data 
Route::post('category/edit/{id}', 'Blog\CategoryController@editActionPost');

Route::get('category/delete/{id}', 'Blog\CategoryController@deleteAction');
Route::post('category/save', 'Blog\CategoryController@saveAction');

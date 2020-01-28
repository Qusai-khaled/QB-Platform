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

use App\Http\Middleware\Admin;

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');


//Route for Post

Route::group(['prefix' => 'post', 'middleware' => 'auth'], function () {
    Route::get('/create', 'PostsController@create')->name('post.create');
    Route::post('/store', 'PostsController@store')->name('post.store');
    Route::get('/show', 'PostsController@index')->name('posts.show');
    Route::get('/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/update/{id}', 'PostsController@update')->name('post.update');
    Route::get('/delete/{id}', 'PostsController@destroy')->name('post.delete');
    Route::get('/trashed', 'PostsController@trashed')->name('posts.trashed');
    Route::get('/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::get('/hard_delete/{id}', 'PostsController@hard_delete')->name('post.hard_delete');
});


//Route for Category

Route::group(['prefix' => 'category', 'middleware' => 'auth'], function () {
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/show', 'CategoryController@index')->name('category.show');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('category.delete');
});

//Route for Tags

Route::group(['prefix' => 'tag', 'middleware' => 'auth'], function () {
    Route::get('/create', 'TagController@create')->name('tag.create');
    Route::post('/store', 'TagController@store')->name('tag.store');
    Route::get('/show', 'TagController@index')->name('tags.show');
    Route::get('/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::post('/update/{id}', 'TagController@update')->name('tag.update');
    Route::get('/delete/{id}', 'TagController@destroy')->name('tag.delete');
});


//Route for Users

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/', 'UsersController@index')->name('users');
    Route::get('/create', 'UsersController@create')->name('users.create');
    Route::post('/store', 'UsersController@store')->name('users.store');
    Route::get('/admin/{id}', 'UsersController@admin')->name('users.admin');
    Route::get('/notadmin/{id}', 'UsersController@notadmin')->name('users.notadmin');
});

//route for user profile
Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/edit', 'ProfileController@index')->name('edit');
    Route::post('/update', 'ProfileController@update')->name('profile.update');
    Route::get('/', 'ProfileController@show')->name('profile');
});


//Route for Setting

Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function () {
    Route::get('/', 'SettingController@index')->name('setting');
    Route::post('/update', 'SettingController@update')->name('setting.update');
});
//Route for Website
Route::group(['middleware' => 'auth'], function () {
    Route::get('/website', 'websiteUIcontroller@index')->name('website');
});


Route::group(['middleware' => 'auth'], function () {
    //Route for showing single post
    Route::get('/post/{slug}', 'websiteUIcontroller@showPost')->name('post.show');
    //Route for showing single category
    Route::get('/category/{id}', 'websiteUIcontroller@category')->name('categores.show');
    //Route for showing single tag
    Route::get('/tag/{id}', 'websiteUIcontroller@tag')->name('tag.show');
    //Route for query results
    Route::get('/results', 'ResultsController@index')->name('results');
});


//route for admin dashboard
Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});

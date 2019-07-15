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

Route::get('/', function () {
   
});

/***************** POSTS *******************/
Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

/***************** USERS  - prikaži sve usere*******************/
Route::get('/users', 'UserController@index')->name('users.index') ;

/********************prikaži formu za kreiranje usera - MORA BITI IZNAD OVIH SA WILDCARDOM {} DA NE BLOKIRA SISTEM******/
Route::get('/users/create', 'UserController@create')->name('users.create');

/*******************prikaži pojedinog usera***********************/
Route::get('/users/{user}', 'UserController@show')->name('users.show');

/********************obriši usera*********************************** */
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');

/********************prikaži formu za uređivanje useraa****************** */
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');



/********************spremi usera u bazu************************************ */
Route::post('/users','UserController@store')->name('users.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

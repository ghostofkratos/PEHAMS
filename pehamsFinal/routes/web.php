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

Route::get('/', 'WelcomeController@index');
Route::get('/kaya', 'WelcomeController@kaya');

Auth::routes();




Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('categories', CategoriesController::class);

    Route::resource('posts', 'PostsController');

    Route::resource('tags', TagsController::class);

    Route::get('trashed-posts', 'PostsController@trashed')->name('trashed-posts.index');

    Route::put('restore-post/{post}', 'PostsController@restore')->name('restore-posts');

    Route::resource('hostels', 'HostelsController');

    Route::get('myhostels', 'HostelsController@myhostels')->name('myhostels');

    Route::get('map', 'HostelsController@map')->name('map');

    Route::post('message-store', 'MessagesController@store')->name('message-store');

    Route::put('users/profile', 'UsersController@update')->name('users.update-profile');

    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');

    Route::get('Contact-Us', 'UsersController@contactUs')->name('contactUs');

});

Route::middleware(['auth','admin'])->group(function (){
    
    Route::get('users', 'UsersController@index')->name('users.index');

    Route::get('owners', 'UsersController@request')->name('users.requests');

    Route::post('users/{user}/verify-owner', 'UsersController@verifyOwner')->name('users.verify-owner');

    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
    
});

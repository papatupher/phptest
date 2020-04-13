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

// Route::middleware(['auth', 'ip.block', 'daily.log', 'register' ])->group(function () { })
Auth::routes();
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/about/{id}', function ($id) {
    // return view('pages.about');
    return 'ETO DAPAT ID HA!'.$id;
});

Route::resource('posts', 'PostsController');
Route::resource('songs', 'SongsController');


Route::get('/home', 'HomeController@index');

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
    return view('welcome');
});
Route::match(['get','post'],'/admin/index/{name}');
Route::get('/translate', 'TranslateController@index');
Route::get('/crawling', 'CrawlingController@index');
Route::get('/google2fa','GoogleauthController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/authenticate', 'LoginController@authenticate');
Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');
Route::get('api/user', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic.once');
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/page/about-us/{hello}', function () {
    echo 'coba link nya koneksi gak';
});

Route::get('test1', 'TestController@test1');

Route::get('/','HomeController@index');

Route::get('/page/{id}','HomeController@page');

Route::get('contact-us', 'ContactusController@index');
Route::post('contact-us/sendmessage', 'ContactusController@sendMessage');


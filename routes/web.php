<?php

use App\Http\Controllers\homeController;
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

/*Route::get('/', function () {
    return view('layout/master');
});*/
Route::get('/', 'homeController@welcome');
Route::post('/login', 'AuthController@authentificate')->name('login');
Route::get('/admin', 'AuthController@admin');




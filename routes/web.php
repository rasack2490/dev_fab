<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'homeController@welcome')->name('home');
Route::get('/inscription', 'homeController@inscription');
Route::post('/login', 'AuthController@authentificate')->name('login');
Route::post('/inscription', 'AuthController@inscrit')->name('inscription');
Route::get('/admin', 'AuthController@admin');

Route::get('/developpeur', 'AuthController@dev')->name('developpeur');
Route::get('/attente', 'AuthController@waiting')->name('attente');
//links admin
Route::get('/listdev', 'AdminController@listeDev')->name('dev');
Route::get('/dash', 'AdminController@dash')->name('dash');
Route::get('/devAccept', 'AdminController@devAccept')->name('devAccept');
Route::post('/del', 'AdminController@supprime')->name('del');
Route::post('/devalidate', 'AdminController@accept')->name('accept');
Route::post('/decline', 'AdminController@decline')->name('refuse');
Route::get('/profile', 'AdminController@showprofile')->name('profile');
Route::get('/parametre','AdminController@program')->name('parametre');
Route::post('/horaire', 'AdminController@horaire')->name('horaire');
Route::post('/place', 'AdminController@modiplace')->name('place');
//links user
Route::post('/reservation', 'userController@reserve')->name('reserve');
Route::get('/user', 'userController@userprofile')->name('userprofile');
Route::get('/deconnexion', 'userController@logout')->name('logout');
Route::get('/reservation', 'AdminController@reserve')->name('reservation');
//Route::get('/del', 'AdminController@index');






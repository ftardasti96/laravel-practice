<?php
// use Symfony\Component\Routing\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'pageController@about');
Route::get('/service', 'pageController@services');
Route::get('/call', 'pageController@call');

Route::resource('/post','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

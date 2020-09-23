<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/', function () {
    return view('welcome');
});


Route::get('user/register', 'AuthController@index');
Route::post('/register', 'AuthController@registerSubmit')->name('auth.register');
Route::get('user/login', 'AuthController@login');
// Route::post('/login', 'AuthController@loginSubmit')->name('auth.login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users','HomeController@index');

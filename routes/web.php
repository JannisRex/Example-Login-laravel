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

// enabling Auth
Auth::routes();

// initial Welcome Screen -- here just /login => to be replaced with Landing Page
Route::get('/', function () {
    return view('/auth/login');
});

//Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Change Password
Route::get('/changePassword','changePasswordController@showChangePasswordForm');
Route::post('/changePassword','changePasswordController@changePassword')->name('changePassword');


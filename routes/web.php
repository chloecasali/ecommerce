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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//Route::get('/account', function () {
//    return view('succeed');
//});



Route::post('/', function () {
    $user = new \App\Models\User();
    $user->name = request()->get('firstname') . ' ' . request()->get('lastname');
    $user->email = request()->get('email');
    $user->password = \Hash::make('password');
    $user->save();
    return \Illuminate\Support\Facades\Redirect::to('/');
});


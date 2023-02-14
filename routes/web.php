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

Route::get('/account', function () {
    return view('succeed');
});



Route::post('/account/register', function () {
    $user = new \App\Models\User();
    $user->name = request()->get('first-name') . ' ' . request()->get('last-name');
    $user->email = request()->get('email');
    $user->password = \Hash::make('password');
    $user->save();
    return \Illuminate\Support\Facades\Redirect::to('/account');
});


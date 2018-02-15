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

Route::get('/', 'IndexController@index');

Route::get('/login', 'IndexController@login');
Route::get('/logout', 'IndexController@logout');
Route::get('/register', 'IndexController@register');
Route::get('/register/confirm', 'IndexController@register_confirm');


Route::get('/home', 'HomeController@index');

Route::get('/bets', 'BetsController@index');
Route::get('/bets/place', 'BetsController@placeBet');
Route::get('/bets/place/finish', 'BetsController@placeBetFinish');
Route::get('/bets/history', 'BetsController@history');


Route::get('/diposit', 'AccountController@diposit');


// Admin
Route::get('/admin', 'Admin\IndexController@index');
Route::get('/admin/login', 'Admin\IndexController@login');

Route::get('/admin/dashboard', 'Admin\DashboardController@index');
Route::get('/admin/payouts/history', 'Admin\PayoutsController@history');
Route::get('/admin/payouts/pending', 'Admin\PayoutsController@pending');
Route::get('/admin/payouts/paid', 'Admin\PayoutsController@paid');
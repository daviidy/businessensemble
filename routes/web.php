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
    return view('bienvenue');
});

Auth::routes();

Route::resource('users', 'UserController');
Route::resource('annonces', 'AnnonceController');
Route::resource('teams', 'TeamController');
Route::resource('categories', 'CategoryController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/entrepreneur', 'EntrepreneurController@entrepreneur')
    ->middleware('is_entrepreneur')
    ->name('entrepreneur');


Route::get('/investor', 'InvestorController@investor')
    ->middleware('is_investor')
    ->name('investor');


Route::get('/admin/users/{user}', 'UserController@show');



    //ajax routes
    Route::post('/uploadAvatar', 'UserController@uploadAvatar');

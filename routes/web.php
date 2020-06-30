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

Route::get('/', 'HomeController@bienvenue');

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
Route::get('/admin/annonces', 'AnnonceController@indexAdmin');
Route::get('/admin/annonces/{annonce}/recommend', 'AnnonceController@recommend');
Route::get('/admin/annonces/{annonce}/unrecommend', 'AnnonceController@unrecommend');

Route::get('/myProjects', 'UserController@myProjects');


    //ajax routes
    Route::post('/uploadAvatar', 'UserController@uploadAvatar');
    Route::post('/addTeam', 'TeamController@createAjax');
    Route::post('/editTeam', 'TeamController@editAjax');
    Route::post('/deleteTeam', 'TeamController@deleteAjax');

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

Route::get('/', 'UserController@bienvenue');

Auth::routes();

//payments gateways
Route::post('paypal', 'PaymentController@payWithpaypal')->name('paywithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

Route::resource('users', 'UserController');
Route::resource('annonces', 'AnnonceController');
Route::resource('teams', 'TeamController');
Route::resource('categories', 'CategoryController');
Route::resource('pricings', 'PricingController');

Route::resource('purchases', 'PurchaseController');

Route::resource('characteristics', 'CharacteristicController');

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

Route::get('/myProjects', 'AnnonceController@myProjects');

Route::get('/publishProject/{annonce}', 'AnnonceController@publishProject');
Route::get('/unpublishProject/{annonce}', 'AnnonceController@unpublishProject');
Route::get('/saveProject/{annonce}', 'AnnonceController@saveProject');
Route::get('/showInterest/{annonce}', 'AnnonceController@showInterest');

Route::get('/whichCategories', 'CategoryController@indexForAnnonces');

Route::get('/searchUsers', 'UserController@goToSearch');
Route::post('/searchUsers', 'UserController@search');

Route::get('/membership', 'PricingController@indexFront');


    //ajax routes
    Route::post('/uploadAvatar', 'UserController@uploadAvatar');
    Route::post('/addTeam', 'TeamController@createAjax');
    Route::post('/editTeam', 'TeamController@editAjax');
    Route::post('/deleteTeam', 'TeamController@deleteAjax');


    //chat routes
    Route::get('/messages', 'MessageController@index')->name('message');
    Route::get('/chat/{user}', 'MessageController@one')->name('message');
    Route::get('/chat/message/{id}', 'MessageController@getMessage')->name('message');
    Route::get('/message/{id}', 'MessageController@getMessage')->name('message');
    Route::post('message', 'MessageController@sendMessage');
    Route::post('/chat/message', 'MessageController@sendMessage');

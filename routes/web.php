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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users','UsersController');
    Route::resource('agent','AgentsController');
    Route::resource('agent_fiche','Agents_FichesController');
});
Route::namespace('Gestionnaire')->prefix('gest')->name('gest.')->group(function(){
    Route::resource('bons','BonsController');
    Route::get('/print','BonsController@print')->name('bons.print');

});



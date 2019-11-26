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

Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::post('/register', 'RegisterController@create');

/* Ajout de Louis */
Auth::routes();

Route::group(['middleware' => ['auth']], function()
{
    Route::get('C3PO', 'C3POController@index')->name('C3PO');
});

Route::group(['middleware' => ['auth']], function()
{
    Route::get('Padme_Amidala', 'Padme_AmidalaController@index')->name('Padme_Amidala');
});
Route::group(['middleware' => ['auth']], function()
{
    Route::get('Yoda', 'YodaController@index')->name('Yoda');
});


Route::group(['middleware' => ['auth']], function()
{
    Route::get('Kaylo_Ren', 'Kaylo_RenController@index')->name('Kaylo_Ren');
});
Route::group(['middleware' => ['auth']], function()
{
    Route::get('Dark_Vador', 'Dark_VadorController@index')->name('Dark_Vador');
});
Route::group(['middleware' => ['auth']], function()
{
    Route::get('Palpatine', 'PalpatineController@index')->name('Palpatine');
});

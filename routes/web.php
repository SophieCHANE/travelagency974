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

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();
/*route de l'accueil*/
Route::get('/','AccueilController@index')->name('accueil');
Route::get('/home','AccueilController@index')->name('accueil');
Route::get('/accueil','AccueilController@index')->name('accueil');
/*destinations*/
/*Route::get('/destinations/create','DestinationController@create')/*->middleware('auth')*/;
/*Route::post('/destinations/store','DestinationController@store');
Route::get('/destinations/read','DestinationController@index');
Route::get('/destinations','DestinationController@index');
Route::delete('destinations/{destination}', 'DestinationController@destroy');
Route::get('destinations/{destination}/edit','DestinationController@edit');
Route::put('destinations/{destination}','DestinationController@update');
Route::get('destinations/{destination}','DestinationController@show');
Route::get('destinations/{destination}/destroy','DestinationController@destroy');*/

Route::resource('destinations','DestinationController')->middleware('auth');
//footer
Route::get('/footerInfo/who','footerInfoController@who');
Route::get('/footerInfo/mentions','footerInfoController@mentions');
Route::get('/footerInfo/contact','footerInfoController@contact');
Route::get('/footerInfo/question','footerInfoController@question');
Route::get('/footerInfo/cgv','footerInfoController@cgv');

//accueil link
//honeymoon
Route::get('honeymoon', 'AccueilController@honeymoon');







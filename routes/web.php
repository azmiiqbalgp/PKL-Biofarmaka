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
    return view('auth.login');
});

Route::resource('user','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/table', function () {
//     return view('tables');
// });
// Route::get('/form', function () {
//     return view('forms');
// });

Route::resource('inventaris','InventarisController');
Route::get('inventarisDelete/{id}','InventarisController@destroy');
// Route::resource('tabelnventaris','TabelInventarisController');

Route::get('/tabelInventaris','TabelInventarisController@index');
Route::get('/tabelInventaris/get_datatable','TabelInventarisController@get_datatable');

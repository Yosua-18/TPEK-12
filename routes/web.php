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

Route::auth();

Route::group(['middleware'=>'auth'],function() {
	Route::get('/', 'BajuyosuaController@index');
	Route::get('bajuyosua/add', 'BajuyosuaController@create') ;
	Route::post('bajuyosua/add', 'BajuyosuaController@store') ;

	Route::get('bajuyosua/{id}/edit','BajuyosuaController@edit');
	Route::patch('bajuyosua/{id}/edit','BajuyosuaController@update');
	Route::delete('bajuyosua/{id}/delete','BajuyosuaController@destroy');

	Route::get('/kemeja_panjang', 'Kemeja_PanjangController@index') ;
	Route::get('/kemeja_panjang/create', 'Kemeja_PanjangController@create') ;
	Route::post('/kemeja_panjang', 'Kemeja_PanjangController@store') ;
	Route::get('/kemeja_panjang/{id}/edit','Kemeja_PanjangController@edit');
	Route::patch('/kemeja_panjang/{id}','Kemeja_PanjangController@update');
	Route::delete('/kemeja_panjang/{id}','Kemeja_PanjangController@destroy');


	Route::get('/buyer', 'BuyerController@buyer') ;		
	Route::get('/buyer/create', 'BuyerController@create') ;
	Route::post('/buyer', 'BuyerController@store') ;
	Route::get('/buyer/{id}/edit','BuyerController@edit');
	Route::patch('/buyer/{id}','BuyerController@update');
	Route::delete('/buyer/{id}','BuyerController@destroy');
});
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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
//

// добавление типа
Route::get('/types/create', 'TypeController@create');
Route::post('/types', 'TypeController@store');

//// просмотр типа
Route::get('/types', 'TypeController@index');
Route::get('/types/{id}', 'TypeController@show'); //показать 1 тип

// редактирование типа
Route::get('/types/edit/{id}', 'TypeController@edit');
Route::put('/types/edit/{id}', 'TypeController@save');

// удаление типа
Route::delete('/types/{id}', 'TypeController@destroy');



// добавление работы
Route::get('/works/create', 'WorkController@create');
Route::post('/works', 'WorkController@store');

// просмотр работ
Route::get('/works', 'WorkController@index');

//
// редактирование работы
Route::get('/works/edit/{id}', 'WorkController@edit');
Route::put('/works/edit/{id}', 'WorkController@save');
//
// удаление типа
Route::delete('/works/{id}', 'WorkController@destroy');
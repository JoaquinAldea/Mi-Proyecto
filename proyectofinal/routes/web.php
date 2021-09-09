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


/* Rutas para las paginas y sus respectivos controladores */

Route::get('/home', 'PaginasController@home')->name('home');

Route::get('/editar', 'PaginasController@editar')->name('editar');

Route::get('/objeto', 'PaginasController@objeto')->name('objeto');

Route::post('/home', 'PaginasController@crear')->name('crear')
;
Route::get('/actualizar/{id}', 'PaginasController@actualizar')->name('editar');

Route::put('/editar/{id}', 'PaginasController@refresh')->name('refresh');

Route::delete('borrar/{id}','PaginasController@eliminar')->name('eleminar');
    

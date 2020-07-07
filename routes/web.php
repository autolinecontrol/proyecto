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
    return view('home');
});

Route::get('/sucursales', function () {
    return view('sucursal');
})->name('sucursales');

Route::get('/empleados', function () {
    return view('home');
})->name('empleados');

Route::get('/revistas', function () {
    return view('home');
})->name('revistas');

Route::get('/periodistas', function () {
    return view('home');
})->name('periodistas');;
 

//__________________________SUCURSALES____________________________________________---
Route::get('admin/sucursales/crear', 'SucursalesController@crear')->name('admin/sucursales/crear');
Route::put('admin/sucursales/store', 'SucursalesController@store')->name('admin/sucursales/store');

/* Leer */
Route::get('admin/sucursales', 'SucursalesController@index')->name('admin/sucursales');
 
/* Actualizar */
Route::get('admin/sucursales/actualizar/{id}', 'SucursalesController@actualizar')->name('admin/sucursales/actualizar');
Route::put('admin/sucursales/update/{id}', 'SucursalesController@update')->name('admin/sucursales/update');
 
/* Eliminar */
Route::put('admin/sucursales/eliminar/{id}', 'SucursalesController@eliminar')->name('admin/sucursales/eliminar');
 
//_____________________________________EMPLEADOS____________________________

Route::get('admin/empleados/crear', 'EmpleadosController@crear')->name('admin/empleados/crear');
Route::put('admin/empleados/store', 'EmpleadosController@store')->name('admin/empleados/store');

/* Leer */
Route::get('admin/empleados', 'EmpleadosController@index')->name('admin/empleados');

/* Actualizar */
Route::get('admin/empleados/actualizar/{id}', 'EmpleadosController@actualizar')->name('admin/empleados/actualizar');
Route::put('admin/empleados/update/{id}', 'EmpleadosController@update');
 

/* Eliminar */
Route::put('admin/empleados/eliminar/{id}', 'EmpleadosController@eliminar')->name('admin/empleados/eliminar');
 

//__________________________Revistas____________________________________________________________
Route::get('admin/revistas/crear', 'RevistasController@crear')->name('admin/revistas/crear');
Route::put('admin/revistas/store', 'RevistasController@store')->name('admin/revistas/store');

/* Leer */
Route::get('admin/revistas', 'RevistasController@index')->name('admin/revistas');
 
/* Actualizar */
Route::get('admin/revistas/actualizar/{id}', 'RevistasController@actualizar')->name('admin/revistas/actualizar');
Route::put('admin/revistas/update/{id}', 'RevistasController@update')->name('admin/revistas/update');
 
/* Eliminar */
Route::put('admin/revistas/eliminar/{id}', 'RevistasController@eliminar')->name('admin/revistas/eliminar');
 

//__________________________Periodistas____________________________________________---
Route::get('admin/periodistas/crear', 'PeriodistasController@crear')->name('admin/periodistas/crear');
Route::put('admin/periodistas/store', 'PeriodistasController@store')->name('admin/periodistas/store');

/* Leer */
Route::get('admin/periodistas', 'PeriodistasController@index')->name('admin/periodistas');
 
/* Actualizar */
Route::get('admin/periodistas/actualizar/{id}', 'PeriodistasController@actualizar')->name('admin/periodistas/actualizar');
Route::put('admin/periodistas/update/{id}', 'PeriodistasController@update')->name('admin/periodistas/update');
 
/* Eliminar */
Route::put('admin/periodistas/eliminar/{id}', 'PeriodistasController@eliminar')->name('admin/periodistas/eliminar');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

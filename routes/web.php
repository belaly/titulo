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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/noticias', 'HomeController@noticias')->name('noticias');



//Route::middleware(['admin'])->group(function () {

    Route::resource('user', 'UserController');
    Route::resource('curso', 'CursoController');
    Route::resource('noticia', 'NoticiaController');



    Route::get('/admin', function () {
        return view('Admin.app');
    });

   // Route::get('/lista_usuarios', function () {
     //   return view('Admin.usuarios.lista_usuarios');
    //});

 

   // Route::get('/crear_usuario', function () {
   //     return view('Admin.usuarios.create');
   // });





Route::middleware(['educadora'])->group(function () {

    Route::get('/educadora', function () {
        return view('Educadora.app');
    });

    Route::get('/educadora/crear_reporte', function () {
        return view('Educadora.reporte.create');
    });

});
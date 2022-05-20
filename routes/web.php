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
    return view('welcome');
});

Route::get('cursos', function () {
    return "Vista cursos";
});

Route::get('cursos/create', function () {
    return 'Estas en seccion de creacion de cursos';
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienviendo al curso $curso de la categoria $categoria";
    }
    return  "Bienviendo al curso $curso";
});

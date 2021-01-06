<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
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
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/center',function (){ 
    return view('center');
});

Route::get('/activity',function (){ 
    return view('activity');
});
Route::get('/blog',function (){ 
    return view('blog');
});


//Route::get('/blog', [HomeController::class, 'blog']);
//autentificacion de usuario 
Auth::routes();

//ruta a mostrar despues de la autentificacion y la funcion a ejecutar en el controlador
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/panel', [CategoriesController::Class,'panel']);
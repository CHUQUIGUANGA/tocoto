<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\HomeController;
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
Route::get('/profile', [HomeController::class, 'index'])->name('home');

Route::get('/profile/monitor', [HomeController::Class,'profile'])->name('perfilM');
Route::get('/profile/actividades', [HomeController::Class,'activities'])->name('activityM');
Route::get('/profile/materiales', [HomeController::Class,'tools'])->name('toolM');
Route::get('/profile/salas', [HomeController::Class,'rooms'])->name('roomM');
Route::get('/profile/posts', [HomeController::Class,'posts'])->name('postM');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
    las rutas se cargan en orden 
*/

Route::get('/', function(){
    return 'Home';
});

Route::get('/usuarios',[UserController::class,'index']);


//detalles de usuarios no es igual que usuario nuevo 
Route::get ('/usuarios/{id}',[UserController::class,'show'])
        ->where('id','[0-9]+');

Route::get('/usuarios/nuevo',[UserController::class,'create']);

//hacemos uso del controlador , pero usando el metodo invoke 
Route::get('/saludo/{name}/{nickname?}',WelcomeUserController::class);

/*
Route::get('/', function () {
    return view('welcome');
});
*/

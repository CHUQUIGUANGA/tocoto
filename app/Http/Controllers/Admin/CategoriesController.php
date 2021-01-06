<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //solicitara que este autentificado para ejecutar las funciones del perfil user
    public function __construct()
    {
        $this->middleware('auth');  
    }
    public function panel(){
        return view('panel');
    }
}

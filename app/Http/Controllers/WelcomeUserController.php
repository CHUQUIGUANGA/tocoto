<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //el metodo invoke hace referencia para no describir enn la ruta 
    public function __invoke($name, $nickname=null){

        if($nickname){
            return "Bienvenido {$name}, tu apodo es {$nickname}";
            }else{
            return  "Bienvenido {$name}, no tienes apodo"; 
            }
    }
}

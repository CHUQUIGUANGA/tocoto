<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');  
    }

    /**
     * Show the application dashboard.
     * si es usuario normal, enviar a profile 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   //si cualquiera de los administradores se logea accedera a su dasboard
       
        return view('profile');
        
    }

    public function profile(){

        return view('/monitor/profileM');
    }
    
    public function activities(){

        return view('/monitor/activities');
    }
    public function tools(){

        return view('/monitor/tools');
    }
    public function rooms(){

        return view('/monitor/rooms');
    }
    public function posts(){

        return view('/monitor/posts');
    }
}

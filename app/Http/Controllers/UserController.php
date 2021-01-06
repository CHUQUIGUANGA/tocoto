<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class UserController extends Controller
{
    //el metodo hace referencia al index
    public function index()
    {
        if(request()->has('empty')){
            $users=[];
        }else{

        $users=[
            'juan',
            'Pepe',
            'Elia',
            'Maite',
            'Tenessi',
            'Efrain'
        ];
    }
        return view('users.index',[
            'users'=> $users,
            'title'=> 'Listado de usuarios',
        ]);
    }

    public function show($id){
        
        return  view('users.show',compact('id'));
        
        //return " Mostramos detalles del usuario:{$id}";

    }

    public function create(){

        return 'Crear nuevo usuario';
    }
}

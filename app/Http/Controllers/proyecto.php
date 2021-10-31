<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proyecto extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function home(){
        return view('home');
    }
    public function create(){
        return view('cliente/create');
    }
    public function micta(){
        return view('cliente/micta');
    }
    public function compras(){
        return view('cliente/compras');
    }
    public function consulta(){
        return view('cliente/consulta');
    }
    public function informacion(){
        return view('cliente/informacion');
    }
    public function realizarcompras(){
        return view('cliente/realizarcompras');
    }

    public function home_user(){
        return view('usuario/home_user');
    }
    public function home_adm(){
        return view('adm/home_adm');
    }
}

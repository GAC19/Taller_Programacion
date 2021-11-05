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
    public function micta(){
        return view('cliente/micta');
    }
    public function compras(){
        return view('cliente/compras');
    }
}

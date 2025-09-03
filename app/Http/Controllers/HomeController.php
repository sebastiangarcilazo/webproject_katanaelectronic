<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contacto()
    {
        return view('contacto');
    }
    public function ayuda()
    {
        return view('ayuda');
    }
    public function creadores()
    {
        return view('creadores_de_contenido');
    }
     public function galeria()
    {
        return view('galeria');
    }
}

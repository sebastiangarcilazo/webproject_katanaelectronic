<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {   
        $clientes = Cliente::paginate(10);
        return view('clientes.index', compact('clientes'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->intended(route('productos.index'))
            ->with('feedback.message', 'Sesion Iniciada ADMIN con Exito');
    }

    return redirect()->intended(route('home'))
        ->with('feedback.message', 'Sesion Iniciada con Exito');
}

        return redirect()
            ->back()
            ->withInput()
            ->with('feedback.message', 'las credenciales ingresadas son incorrectas');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login')
            ->with('feedback.message', 'Sesion Cerrada con Exito');

    }
    public function register()
{
    return view('auth.register');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
    ]);
    
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user',
    ]);

    return redirect()->route('auth.login')->with('success', 'Usuario registrado correctamente. Iniciá sesión.');
}
}

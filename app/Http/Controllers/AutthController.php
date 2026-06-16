<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutthController extends Controller
{
    public function formularioRegistro(){
        return view('backend.usuarios.registrarse');
    }

    public function formularioIngresar(){
        return view('backend.usuarios.ingresar');
    }

    public function registrar(Request $request){
        $request->validate([
           'name'     => 'required|string|max:255',
           'email'    => 'required|email|unique:users',
           'password' => 'required|min:6|confirmed'
        ]);
    }

    // Valida que lleguen el email y la password
    public function autenticar(Request $request){
    $credenciales = $request->validate([ 'email' => 'required|email',
    'password' => 'required' ]);
    // Auth::attempt() busca el usuario en la BD y compara la contraseña
    // Si coincide → inicia la sesión y devuelve true
    // Si no coincide → devuelve false
    if(Auth::attempt($credenciales)){
        $request->session()->regenerate();
    if(Auth::user()->rol === 'admin'){
    return redirect('/admin');
    }
    return redirect('/cliente'); // si no es admin, es cliente }
    // Si las credenciales son incorrectas, vuelve al login con error
    return back()->withErrors([ 'email' => 'Email o contraseña incorrectos' ]);
    }
    }
}

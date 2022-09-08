<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formularioDeLogin()
    {
        return view('login.formulario');
    }

    public function autenticar(Request $request)
    {
        $request->validate([
            'cpf' => ['required', 'min:14', 'max:14'],
            'senha' => 'required'
        ]);

        if (!Auth::attempt(['cpf' => $request->cpf, 'password' => $request->senha])) {
            return redirect()->back()->withErrors('Usuário ou senha inválidos')->withInput();
        }
        
        return to_route('home');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
    
}

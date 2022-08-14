<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function autenticar(Request $request)
    {
        if (!Auth::attempt(['cpf' => $request->cpf, 'password' => $request->senha])) {
            return response()->json('Usuário ou senha inválidos', 401);
        }

        $token = Auth::user()->createToken('token_acesso');
        return response()->json(['token' => $token->plainTextToken]);
    }

    
}
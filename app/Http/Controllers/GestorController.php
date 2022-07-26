<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Emprestimo;
use Illuminate\Support\Facades\Auth;

class GestorController
{
    public function mostraTelaInicial()
    {
        $cliente = Auth::user();
        $novoEmprestimos = $cliente->emprestimos;
        return view('gestor.tela-gestor')
            ->with('novoEmprestimos', $novoEmprestimos)
            ->with('cliente', $cliente);
    }
    
    public function listarEmprestimosParaAnalisar()
    {
        return view('gestor.lista-de-emprestimos-para-analisar')
            ->with('emprestimos', Emprestimo::where('status_emprestimo', 'SOLICITADO')->get());
    }

    public function listarTodosOsEmprestimos()
    {
        return view('gestor.lista-de-todos-emprestimos')
            ->with('emprestimos', Emprestimo::all());
    }


}
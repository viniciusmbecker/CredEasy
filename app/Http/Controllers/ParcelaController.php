<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    public function listarParcela(Emprestimo $emprestimo)
    {
        $parcelas = $emprestimo->parcelas;

        return view('emprestimo.parcelas')->with('parcelas', $parcelas);
    }
}

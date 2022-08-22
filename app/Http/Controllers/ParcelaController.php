<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    public function listarParcela(Emprestimo $emprestimo)
    {
        $parcelas = $emprestimo->parcelas;

        return view('emprestimo.parcelas')->with('parcelas', $parcelas);
    }

    public function listarParcelas(Emprestimo $emprestimo)
    {
        $parcelas = $emprestimo->parcelas;

        return $parcelas;
    }


    public function listarEmprestimoComParcela(Emprestimo $emprestimo)
    {
        $parcelas = $emprestimo->parcelas;

        return view('emprestimo.emprestimo-com-parcela')
            ->with('parcelas', $parcelas)
            ->with('emprestimo', $emprestimo);
    }

    public function pagarParcela(Parcela $parcela, Request $request)
    {
        $emprestimo = Emprestimo::find($parcela->emprestimo_id);

        $parcelaSeguinte = $emprestimo->parcelas()->where('status', 'ABERTA')->first()->numero_parcela;

        if ($parcela->numero_parcela != $parcelaSeguinte) {
            echo("É preciso pagar a parcela anterior primeiro!!");
            return to_route('emprestimo.parcelas', $emprestimo->id);
        }

        $parcela->status = 'PAGA';
        $parcela->data_pagamento = now();
        $parcela->valor_pago = $parcela->valor_parcela;
        $parcela->save();

        if ($parcela->numero_parcela === $emprestimo->parcelas->count()) {
            $emprestimo->status_emprestimo = 'QUITADO';
            $emprestimo->data_quitacao = now();
            $emprestimo->save();
        }

        return to_route('emprestimo.comparcela', $parcela->emprestimo_id);
    }
}

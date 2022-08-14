<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Emprestimo;
use App\Models\Parcela;
use DateInterval;
use DateTimeImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function listarEmprestimosCliente(Emprestimo $emprestimo)
    {
        return view('emprestimo.lista-emprestimo-cliente')
            ->with('emprestimos', Emprestimo::all());
    }

    public function listarEmprestimosParaGestor()
    {
        return view('emprestimo.index')
            ->with('emprestimos', Emprestimo::where('status_emprestimo', 'SOLICITADO')->get());
    }

    public function detalhesEmprestimo(Emprestimo $emprestimo)
    {
        return view('emprestimo.detalhes-emprestimo')->with('emprestimo', $emprestimo);
    }
    

    public function exibeFormularioDeSolicitacao()
    {
        return view('emprestimo.formulario');
    }

    public function registraSolicitacao(Request $request)
    {
        // $request->validate([
        //     'valorDesejado' => 'required|numeric|min:1000',
        //     'quantidadeParcelas' => 'required|integer|min:1'    
        // ]);

        $valor_emprestimo = $request->input('valorDesejado');
        $valor_emprestimo = preg_replace('/[\D]/','',$valor_emprestimo);
        $valor_emprestimo = floatval($valor_emprestimo)/100;

        $novoEmprestimo = new Emprestimo();
        $novoEmprestimo->valor_emprestimo = $valor_emprestimo;
        $novoEmprestimo->valor_pago = 0;
        $novoEmprestimo->taxa_juros = 0.1;
        $novoEmprestimo->data_solicitacao = now();
        $novoEmprestimo->cliente_cpf = Auth::user()->cpf;

        $quantidadeDeParcelas = $request->input('quantidadeParcelas');
        $valorFinalEsperado = $novoEmprestimo->valor_emprestimo * (1 + $novoEmprestimo->taxa_juros);
        $valorDaParcela = $valorFinalEsperado / $quantidadeDeParcelas;

        if ($valorDaParcela < 200) {
            $mensagem = "Valor mínimo da parcela deve ser de R$ 200,00. Valor calculado: R$ $valorDaParcela";
            return to_route('emprestimo.solicitacao')
                ->with('mensagem', $mensagem);
        }
    
        $proximoVencimento = new DateTimeImmutable();
        $novoEmprestimo->save();

        for ($i=1; $i <= $quantidadeDeParcelas; $i++) { 
            $proximoVencimento = $proximoVencimento->add(new DateInterval('P1M'));

            $parcela = new Parcela(); 
            $parcela->numero_parcela = $i;
            $parcela->valor_parcela = $valorDaParcela;
            $parcela->emprestimo_id = $novoEmprestimo->id;
            $parcela->data_vencimento = $proximoVencimento->format('Y-m-d');

            $parcela->save();
        }


        return to_route('dashboard');
    }

    public function analisarEmprestimo(Cliente $cliente, Emprestimo $emprestimo)
    {
        $cliente = $emprestimo->cliente;
        $valorParcela = $emprestimo->parcelas()->first()->valor_parcela;
        return view('emprestimo.analisar-emprestimo')
            ->with('cliente', $cliente)
            ->with('emprestimo', $emprestimo)
            ->with('valorParcela',$valorParcela);
    }

    public function atualizaStatus(Request $request, Emprestimo $emprestimo)
    {
        $valor = $request->input('btn');
        if ($valor === '1') {
            $emprestimo->status_emprestimo = 'APROVADO';
        } else {
            $emprestimo->status_emprestimo = 'REPROVADO';
        }

        $emprestimo->save();

        return to_route('analisa.emprestimo');
    }

    public function emprestimoAprovado()
    {
        return view('emprestimo.emprestimos-aprovados')
            ->with('emprestimos', Emprestimo::where('status_emprestimo', 'APROVADO')->get());
    }
    
}

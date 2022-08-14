<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.index')
            ->with('clientes', Cliente::all());
    }

    public function listaClientes()
    {
        return Cliente::where('tipo_usuario', 'CLIENTE')->get();
    }


    public function dashboard()
    {
        /**
         * @var Cliente $cliente
         */
        $cliente = Auth::user();
        $novoEmprestimos = $cliente->emprestimos()->orderBy('data_solicitacao', 'desc')->get();
        return view('cliente.tela-cliente')
            ->with('novoEmprestimos', $novoEmprestimos)
            ->with('cliente', $cliente);
    }

    public function formularioDeCadastro()
    {
        return view('cliente.cadastro');
    }

    public function cadastrarCliente(Request $request)
    {
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $renda = $request->input('renda');
        $renda = preg_replace('/[\D]/','',$renda);
        $renda =floatval($renda)/100;
        $telefone = $request->input('fone');
        $endereco = $request->input('endereco');
        $profissao = $request->input('profissao');
        $email = $request->input('email');
        $senha = $request->input('senha');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->renda = $renda;
        $cliente->telefone = $telefone;
        $cliente->endereco = $endereco;
        $cliente->profissao = $profissao;
        $cliente->email = $email;
        $cliente->senha = password_hash($senha, PASSWORD_ARGON2I);


        $cliente->save();
        Auth::user();
        return to_route('home');
    }
    
}

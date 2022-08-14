<?php
    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Emprestimo;

    class EmprestimoController extends Controller
    {
        public function listarEmprestimo()
        {
            return Emprestimo::all();
        }

        public function detalhamentoEmprestimo(Emprestimo $emprestimo)
        {
            $emprestimo->qtd_parcelas = $emprestimo->parcelas->count();
            $emprestimo->parcelas_pagas = $emprestimo->parcelasPagas();
            return $emprestimo;
        }
        
    }
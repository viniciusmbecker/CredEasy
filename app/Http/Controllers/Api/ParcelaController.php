<?php 
    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Emprestimo;

    class ParcelaController extends Controller
    {
        public function listarParcelas(Emprestimo $emprestimo)
        {
            $parcelas = $emprestimo->parcelas;

            return $parcelas;
        }
    }
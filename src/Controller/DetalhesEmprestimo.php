<?php
    namespace Vini\Credeasy\Controller;

    class DetalhesEmprestimo implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/detalhes-emprestimo.php';
        }
    }
?>
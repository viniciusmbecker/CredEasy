<?php
    namespace Vini\Credeasy\Controller;

    class FormularioLogin implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/login.php';
        }
    }
?>
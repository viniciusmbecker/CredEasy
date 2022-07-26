<?php
    namespace Vini\Credeasy\Controller;

    class FormularioHome implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/home.php';
        }
    }
?>
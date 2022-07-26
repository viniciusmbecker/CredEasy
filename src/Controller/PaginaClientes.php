<?php
    namespace Vini\Credeasy\Controller;

    class PaginaClientes implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/nova-tela.php';
        }
    }
?>
<?php
    namespace Vini\Credeasy\Controller;

    class FormularioInsercaoCliente implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            // $titulo = 'Novo cliente';
            require __DIR__ . '/../../view/cadastro.php';
        }
    }
?>
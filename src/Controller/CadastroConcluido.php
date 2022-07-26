<?php
    namespace Vini\Credeasy\Controller;

    class CadastroConcluido implements InterfaceControladorRequisicao
    {
        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/cadastro-concluido.php';
        }
    } 
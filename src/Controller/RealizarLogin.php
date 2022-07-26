<?php
    namespace Vini\Credeasy\Controller;

    use Vini\Credeasy\Entity\Cliente;
    use Vini\Credeasy\Infra\EntityManagerFactory;

    class RealizarLogin implements InterfaceControladorRequisicao
    {
        /**
         * @var \Doctrine\Common\Persistence\ObjectRepository
         */
        private $repositorioDeClientes;

        public function __construct()
        {
            $entityManager = (new EntityManagerFactory())->getEntityManager();
            $this->repositorioDeClientes = $entityManager->getRepository(Cliente::class);
        }

        public function processaRequisicao(): void
        {
            $email = filter_input(
                INPUT_POST, 
                'email',
                FILTER_VALIDATE_EMAIL
            );

            if (is_null($email) || $email === false) {
                echo "email invalido";
                return;
            }

            $senha = filter_input(
                INPUT_POST, 
                'senha',
                FILTER_SANITIZE_STRING
            );

            /** @var Cliente $cliente */
            $cliente = $this->repositorioDeClientes
                ->findOneBy(['email' => $email]);
            
                
            if (is_null($cliente) || !$cliente->senhaEstaCorreta($senha)) {
                echo "Email ou senha incorretos";
                return;
            }

            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $cliente->getNome();

            header('Location: /dashboard');



        }
    }
?>
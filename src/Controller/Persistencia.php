<?php
    namespace Vini\Credeasy\Controller;

    use Vini\Credeasy\Entity\Cliente;
    use Vini\Credeasy\Infra\EntityManagerFactory;

    class Persistencia implements InterfaceControladorRequisicao
    {
        /**
         * @var \Doctrine\ORM\EntityManagerInterface 
         */
        private $entityManager;

        public function __construct()
        {
            $this->entityManager = (new EntityManagerFactory())
                ->getEntityManager();
        }

        public function processaRequisicao(): void
        {
            $cpf = filter_input(
                INPUT_POST,
                'cpf',
                FILTER_SANITIZE_STRING
            );

            $nome = filter_input(
                INPUT_POST,
                'nome',
                FILTER_SANITIZE_STRING
            );

            $renda = filter_input(
                INPUT_POST,
                'renda',
                FILTER_SANITIZE_NUMBER_FLOAT
            );

            $renda = $renda/100;

            $endereco = filter_input(
                INPUT_POST,
                'endereco',
                FILTER_SANITIZE_STRING
            );

            $profissao = filter_input(
                INPUT_POST,
                'profissao',
                FILTER_SANITIZE_STRING
            );

            $numeroDeTelefone = filter_input(
                INPUT_POST,
                'fone',
                FILTER_SANITIZE_STRING
            );

            $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_SANITIZE_STRING
            );

            $senha = filter_input(
                INPUT_POST,
                'senha',
                FILTER_SANITIZE_STRING
            );

            $cliente = new Cliente(
                $cpf,
                $nome,
                $renda,
                $endereco,
                $profissao,
                $numeroDeTelefone,
                $email,
                password_hash($senha, PASSWORD_ARGON2I)
            );


            $this->entityManager->persist($cliente);
            $this->entityManager->flush();

            header('Location: /cadastro-concluido');
            // echo "Boa garotinho";
        }
    }
?>
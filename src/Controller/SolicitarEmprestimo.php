<?php
    namespace Vini\Credeasy\Controller;

    use Vini\Credeasy\Infra\EntityManagerFactory;

    class SolicitarEmprestimo implements InterfaceControladorRequisicao
    {
        // /**
        //  * @var \Doctrine\ORM\EntityManagerInterface 
        //  */
        // private $entityManager;

        // public function __construct()
        // {
        //     $this->entityManager = (new EntityManagerFactory())
        //         ->getEntityManager();
        // }

        public function processaRequisicao(): void
        {
            require __DIR__ . '/../../view/solicitacao-emprestimo.php';
        }
    }
?>
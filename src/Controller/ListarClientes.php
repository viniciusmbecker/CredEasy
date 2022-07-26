<?php
    namespace Vini\Credeasy\Controller;

    use Vini\Credeasy\Entity\Cliente;
    use Vini\Credeasy\Infra\EntityManagerFactory;

    class ListarClientes implements InterfaceControladorRequisicao
    {
        private $repositorioDeClientes;

        public function __construct()
        {
            $entityManager = (new EntityManagerFactory())
                ->getEntityManager();
            $this->repositorioDeClientes = $entityManager
                ->getRepository(Cliente::class);    
        }

        public function processaRequisicao(): void
        {
            $clientes = $this->repositorioDeClientes->findAll();
            // $titulo = 'Lista de Clientes';
            require __DIR__ . '/../../view/listar-clientes.php';
        }
    }
?>
<?php
    use Vini\Credeasy\Infra\EntityManagerFactory;

    require_once __DIR__ . '/vendor/autoload.php';

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    var_dump($entityManager->getConnection());
?>
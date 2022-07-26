<?php
    namespace Vini\Credeasy\Infra;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityManagerInterface;
    use Doctrine\ORM\Tools\Setup;

    class EntityManagerFactory
    {
        /**
         * @return EntityManagerInterface
         * @throws \Doctrine\ORM\ORMException
         */
        public function getEntityManager(): EntityManagerInterface
        {
            $rootDir = __DIR__ . '/../..'; 
            $scanDir = $rootDir . '/src';
            $devMode = true;

            $config = Setup::createAnnotationMetadataConfiguration(
                [$scanDir],
                $devMode
            );

            $connection = [
                'driver' => 'pdo_mysql',
                'host' => '127.0.0.1',
                'dbname' => 'credeasydatabase',
                'user' => 'root',
                'password' => 'root'
            ];
            return EntityManager::create($connection, $config);
        }
    }
?>
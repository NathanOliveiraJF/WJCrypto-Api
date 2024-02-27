<?php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

$config = ORMSetup::createAttributeMetadataConfiguration(
  paths: array("./src"),
  isDevMode: true
);

$connectionParams = ['driver' => '',
  'host' => '',
  'database' =>  '',
  'username' => '',
  'password' =>  '',
  'charset' => '',
  'collation' => '',
  'prefix' => '',
];

$connection = DriverManager::getConnection($connectionParams);
$entityManager = new EntityManager($connection, $config);
ConsoleRunner::run(new SingleManagerProvider($entityManager));

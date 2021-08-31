<?php

use Estudo\Doctrine\Entity\Aluno;
use Estudo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno() $alunoList
 */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}" . PHP_EOL . PHP_EOL;
}

$vini = $alunoRepository->find(4);
echo $vini->getNome() . PHP_EOL . PHP_EOL;

$sabrinaCamargo = $alunoRepository->findOneBy([
    'nome' => 'Sabrina Camargo'
]);

var_dump($sabrinaCamargo);
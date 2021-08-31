<?php

use Estudo\Doctrine\Entity\Aluno;
use Estudo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepostory = $entityManager->getRepository(Aluno::class);

$id = $argv[1];
$novoNome = $argv[2];

$aluno = $alunoRepostory->find($id);
$aluno->setNome($novoNome);

$entityManager->flush();

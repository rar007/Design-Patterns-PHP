<?php

require_once('../autoloader.php');

$compradores = [
    'Gabriel Anhaia',
    'Anderson Scherer',
    'Braian Ottoni'
];

$livroPHP = new \Prototype\LivroPHPPrototype();
$livroPHP->setTitulo('Padroes de Projeto PHP 7.2');

$livros = [];

foreach ($compradores as $nomeComprador)
{
    $livroComprador = clone $livroPHP;

    $livroComprador->setNomeTitular($nomeComprador);

    $livros = $livroComprador;
}

echo '<pre>';
print_r($livros);
echo '</pre>';
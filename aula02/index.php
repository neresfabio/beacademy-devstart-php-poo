<?php

ini_set('display_errors', 1);

include 'Produto.php';

$p1 =new Produto(); // criando obj
$p1->alterarNome('Tênis para corrida');
$p1->alterarValor(199);

$p2 =new Produto(); // criando obj
$p2->alterarNome('Calça Jeans');
$p2->alterarValor(100);

// chamada do método
var_dump($p2);
var_dump($p1);
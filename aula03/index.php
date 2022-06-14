<?php

ini_set('display_errors', 1);

include 'Produto.php';
include 'Categoria.php';


$c1 = new Categoria("Roupas","Roupas Unissex");
$c2 = new Categoria("Roupas de Banho","Toalhas, toalhas para rosto, etc...");
$c3 = new Categoria("Calçados","Calçados em geral");

$p1 = new Produto("Tênis para corrida", 199, $c3); // criando obj
$p1->setDescricao('Tênis para corrida profissional');
//$p1->setNome('Tênis para corrida');
//$p1->setValor(199);

$p2 =new Produto("Calça Jeans", 150, $c1); // criando obj
//$p2->setCategoria($c2); não vai funcionar pq Categoria é apenas para leitura.
//$p2->setNome('Calça Jeans');
//$p2->setValor(100);

$p3 =new Produto("Saia feminina", 130, $c1); // criando obj

// chamada do método
var_dump($p1);
var_dump($p2);
var_dump($p3);
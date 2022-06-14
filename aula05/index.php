<?php

//Importando classes
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

//usando construtor do Usuário
$c1 = new Cliente('chiquin@gmail.com','12345678');
$c1->setName('Chiquin');
$c1->setDataCadastro('12/03/1990');

//Validação CPF
$cpf = "123321543";

Validar::validarCpf($cpf);
// $validador = new Validar(); Com o método static não preciso usar essa forma
// $validador->validarCpf($cpf);

$c1->setCpf($cpf);;

//usando construtor do Gestor
$g1 = new Gestor('zezinho@gmail.com','00000000',2450);
$g1->setName('Zezim');

// usando GestorGeral

$gg1 = new GestorGeral('maria@gmail.com','1p2n3m4',9000);

var_dump($c1);
var_dump($g1);
var_dump($gg1);
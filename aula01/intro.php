<?php

include 'Aluno.php';
include 'Professor';
include 'Cursor';
include 'Disciplina';

$aluno = new Aluno();

$aluno -> nome = 'Marcos';
$aluno -> sobrenome = 'Junior';
$aluno -> cpf = '01212332112';
$aluno -> media = 9.5;
$aluno -> telefone = "93 99999-0000";

echo "<h1>Aluno: {$aluno -> nome}</h1>";
<?php
// instanciar as classes

//forcando o sistema mostrar os erros na pagina

ini_set('display_errors',1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> nome = 'Bruna Santos';
$p1 -> cpf = '123.432.234-21';
$p1 -> telefone = '+55 93 99999-0001';
$p1 -> especialidade = 'Programação Imperativa';
$p1 -> salario = '2.890,00';

var_dump($p1);// mostra na pagina todas as informações referente o objeto
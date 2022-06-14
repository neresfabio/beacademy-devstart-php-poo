<?php

ini_set('display_errors',1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12312312300';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($cpf);

echo 'Funcionou!';
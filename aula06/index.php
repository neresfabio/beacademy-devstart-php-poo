<?php

// ini_set('display_errors', 1);

// include 'classes/Usuario.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Categoria.php';

// include 'classes/Config/Usuario.php';

include "vendor/autoload.php";

// use Classes\Config\Usuario;
// use Classes\Categoria;

// reference the Dompdf namespace
use Dompdf\Dompdf;

//$us1 = new Classes\Usuario();
//$us2 = new Classes\Config\Usuario();

// $us2 = new UsuarioConfig();

// var_dump($us1);
// var_dump($us2);

// echo 'Funcionou!';



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
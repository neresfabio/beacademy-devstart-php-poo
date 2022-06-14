<?php
$url = explode('?',$_SERVER['REQUEST_URI']);

include 'pages/header.php';
include 'pages/menu.php';
include "acoes.php";

match($url[0]){
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => error404(),
};


// if($url === '/'){
//     home();
// }elseif($url === '/login'){
//     login();
// }elseif($url === '/cadastro'){
//     cadastro();
// }elseif($url === '/listar'){
//     listar();
// }else{
//     error404();
// }

include 'pages/footer.php';
<?php

function cadastro(){

    //var_dump($_POST);
    if($_POST){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $arquivo = fopen('dados/contatos.csv', 'a+');

    // Abre o arquivo para escrever
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);

    fclose($arquivo);// feicha o arquivo

    $mensagem ='Pronto, cadastro realizado';

    include 'pages/mensagem.php';
    }
    include 'pages/cadastro.php';

}

function login(){
    include 'pages/login.php';
}

function listar(){
    $contatos = file('dados/contatos.csv');

    include 'pages/listar.php';
}

function home(){
    include 'pages/home.php';
}

function relatorio(){
    include 'pages/relatorio.php';
}

function excluir(){
    $id = $_GET['id'];
    
    $contatos  =  file('dados/contatos.csv');

    unset($contatos[$id]);

    unlink('dados/contatos.csv');

    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach($contatos as $cadaContato){
        fwrite($arquivo, $cadaContato);
    }

    $mensagem = 'Pronto, contato excluído';

    include 'pages/mensagem.php';
}

function editar(){
    $id = $_GET['id'];
    
    $contatos = file('dados/contatos.csv');
    
    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');
        foreach($contatos as $cadaContato){
            fwrite($arquivo, $cadaContato);
        }
        fclose($arquivo);

        $mensagem = 'Pronto, contato atualizado!';

        include 'pages/mensagem.php';
    }


    $dados = explode(';',$contatos[$id]);


    include 'pages/editar.php';
}

function error404(){
    include 'pages/404.php';
}

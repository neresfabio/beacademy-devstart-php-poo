<?php

declare(strict_types = 1);

final class Cliente extends Usuario
{
    // Esses atributos são comuns, foram para uma nova classe.

    // private string $name;
    // private string $email;
    // private string $senha;
    // private string $cpf;
    
    private string $dataCadastro;

    // Esses métodos foram movidos para nova classe. 

    // public function getNome():string
    // {
    //     return $this->nome;
    // }

    // public function setNome(string $nome):void
    // {
    //     $this->nome = $nome;
    // }

    public function getDataCadastro():string
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro):void
    {
        $this->dataCadastro = $dataCadastro;
    }
}
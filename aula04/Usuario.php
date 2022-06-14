<?php

declare(strict_types = 1);

abstract class Usuario
{
    private string $name;
    private string $email;
    private string $senha;
    private string $cpf;

    //Construtor
    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    public function getSenha():string
    {
        return $this->senha;
    }

    public function setSenha(string $senha):void
    {
        $this->senha = $senha;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf):void
    {
        $this->cpf = $cpf;
    }
}    
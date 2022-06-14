<?php

declare(strict_types = 1);

class Gestor extends Usuario
{
    // Esses atributos são comuns, foram para uma nova classe.

    // private string $nome;
    // private string $email;
    // private string $senha;
    // private string $cpf;

    private float $salario;
    private string $horario;

    // Sobrescrita Construtor
    public function __construct(string $email, string $senha,float $salario)
    {
        parent::setEmail($email);
        parent::setEmail($senha);
        $this->salario = $salario;
    }

    // Esses métodos foram para nova class.

    // public function getNome($nome):string
    // {
    //     return $this->nome;
    // }

    // public function setNome($nome):void
    // {
    //     $this->nome = $nome;
    // }

    public function getSalario():float
    {
        return $this->salario;
    }

    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }

    public function getHorario():String
    {
        return $this->horario;
    }

    public function setHorario(float $horario):void
    {
        $this->horario = $horario;
    }
}
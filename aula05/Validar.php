<?php

declare(strict_types = 1);

class Validar
{
    // Método Static
    public static function validarCpf(string $cpf): void
    {
        if(strlen($cpf) !== 11){// apenas números
            die('Ops CPF invalido');
        }
    }
    // public function validarCpf(string $cpf): void
    // {
    //     if(strlen($cpf) !== 11){// apenas números
    //         die('Ops CPF invalido');
    //     }
    // }
}
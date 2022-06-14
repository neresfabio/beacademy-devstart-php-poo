<?php

declare(strict_types = 1);

class ValidarUS implements Validar
{
    public function validarDocumento(string $documento):void
    {
        if(strlen($documento) !== 18){
            die('CPF US invalido!');
        }
    }
}
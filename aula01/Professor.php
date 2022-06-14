<?php

declare(strict_types=1);

class Professor {
    public string $nome;
    public string $cpf;
    public string $telefone;
    public string $especialidade;
    public float $salario;
}

//obs: a partir da v7.4 do PHP, que é possível
// deixar explicito o tipo da variável mas se faz necessário
// o uso do declare(strict_types=1)  
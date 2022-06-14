<?php

declare(strict_types = 1);

class Categoria
{
    // Novo método no PHP8
    public function __construct
    (
        private string $nome,
        private string $descricao
    ){}

        public function getNome()
        {
            $this->nome;
        }

        public function setNome($novoNome)
        {
            $this->nome = $novoNome;
        }

        public function getDescricao()
        {
            $this->descricao;
        }

        public function setDescricao($novoDescricao)
        {
            $this->descricao = $novoDescricao;
        }
    // public function __construct(string $nome, string $descricao)
    // {
    //     $this->nome = $nome;
    //     $this->descricao = $descricao;
    // }
}
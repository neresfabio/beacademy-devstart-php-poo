<?php

declare(strict_types = 1);

class Produto
{
    //variáveis privadas
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria;

    //Método mágico de construção do obj
    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
        $this->categoria = $categoria;
    }

    //Métodos
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
            die('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

    public function getDescricao()
    {
        $this->descricao;
    }

    public function setDescricao(string $novoDescricao):void
    {
        $this->descricao = $novoDescricao;
    }

    public function setCategoria(Categoria $categoria):void
    {
        $this->categoria = $categoria;
    }
}
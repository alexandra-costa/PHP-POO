<?php

class Produto{
    private int $id;
    private string $nome;
    private float $preco;
    private Categoria $categoria;
    private float $desconto;
    private int $quantidade;


    public function __construct(int $id, string $nome, float $preco, Categoria $categoria, int $quantidade, float $desconto)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->quantidade = $quantidade;
        $this->desconto = $desconto;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @return float
     */
    public function getDesconto(): float
    {
        return $this->desconto;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

}




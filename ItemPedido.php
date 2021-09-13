<?php

class ItemPedido
{
    private float $desconto;
    private float $preco;
    private int $id_produto;
    private int $quantidade;


    public function __construct(int $id_produto, float $desconto, float $preco, int $quantidade)
    {
        $this->id_produto = $id_produto;
        $this->desconto = $desconto;
        $this->preco = $preco;
        $this->quantidade =  $quantidade;
    }

}
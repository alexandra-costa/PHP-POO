<?php

class Endereco
{
    private int $id;
    private string $logradouro;
    private string $numero;
    private string $complemento;
    private string $bairro;
    private string $cep;
    private Cidade $cidade;


    public function __construct(int $id, string $logradouro, string $numero, string $complemento, string $bairro, string $cep, Cidade $cidade)
    {
        $this->id = $id;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cidade = $cidade;
    }

}
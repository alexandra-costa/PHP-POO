<?php

class
Cliente
{
    private int $id;
    private string $nome;
    private string $email;
    private string $cpfOuCnpj;
    private $tipoCliente;
    private Telefone $telefone;
    private Endereco $endereco;


    public function __construct(int $id, string $nome, string $email, string $cpfOuCnpj, $tipoCliente, Telefone $telefone, Endereco $endereco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpfOuCnpj = $cpfOuCnpj;
        $this->tipoCliente = $tipoCliente;
        $this->telefone = $telefone;
        $this->endereco =  $endereco;
    }

}



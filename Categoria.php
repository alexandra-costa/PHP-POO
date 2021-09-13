<?php

class Categoria
{
    private $id;
    private $nomeCategoria;

    public function __construct($id, $nomeCategoria)
    {
        $this->id = $id;
        $this->nomeCategoria = $nomeCategoria;
    }
}
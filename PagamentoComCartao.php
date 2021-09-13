<?php

class PagamentoComCartao extends Pagamento
{
    private int $numeroDeParcelas;


    public function __construct(int $id, string $status, int $numeroDeParcelas)
    {
        parent::__construct($id, $status);
        $this->numeroDeParcelas = $numeroDeParcelas;

    }


}

//$c1 = new PagamentoComCartao(1, StatusPagamento::quitado, 3);

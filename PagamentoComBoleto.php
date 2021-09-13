<?php

class PagamentoComBoleto extends Pagamento
{
    private string $dataVencimento;
    private string $dataPagamento;



    public function __construct(int $id, string $status, string $dataVencimento, string $dataPagamento)
    {
        parent::__construct($id, $status);
        $this->dataVencimento = $dataVencimento;
        $this->dataPagamento = $dataPagamento;

    }




}
//$c2 = new PagamentoComBoleto(1, StatusPagamento::PENDENTE,'09/11/2002', '03/09/2000');
//var_dump($c2);
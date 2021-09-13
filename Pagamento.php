<?php

class Pagamento
{
    private $id;
    private $status;

    public function __construct($id, $status)
    {
        $this->id = $id;
        $this->status = $status;
    }

}

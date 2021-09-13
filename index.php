<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
require_once 'Cliente.php';
require_once 'Telefone.php';
require_once 'Cidade.php';
require_once 'Endereco.php';
require_once 'Pedido.php';
require_once 'Pagamento.php';
require_once 'PagamentoComBoleto.php';
require_once 'PagamentoComCartao.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Categoria.php';
require_once 'Pedido.php';
require_once 'StatusPagamento.php';
require_once 'EnumTipoCliente.php';
require_once 'EnumEstados.php';

$categoria1= new Categoria(1, 'Informática');
$categoria2= new Categoria(2, 'Escritório');


$pagamento1 = new PagamentoComCartao(1, StatusPagamento::QUITADO, 6);
$pagamento2 = new PagamentoComBoleto(2, StatusPagamento::PENDENTE, '20/10/2017', '19/10/2017');

$cidade1 = new Cidade(1, 'Uberlândia', EnumEstados::MG);
$cidade2 = new Cidade(2, 'São Paulo', EnumEstados::SP);


$endereco1 = new Endereco(2, 'Rua flores', '300', 'Apto 203', 'Jardim', '68220834', $cidade1);
$endereco2 = new Endereco(2, 'Avenida Matos', '105', 'Sala 800', 'Centro', '96777012', $cidade2);

$telefone1 = new Telefone('27363323');
$telefone2 = new Telefone('98883234');


$cliente1 = new Cliente(1,'Maria Silva','maria@gmail.com','36378912377', EnumTipoCliente::PF, $telefone1, $endereco1);

$produto1 = new Produto(1, 'Computador', 2000, $categoria1, 0, 0);
$produto2 = new Produto(2, 'Impressora', 800, $categoria2, 0, 0);
$produto3 = new Produto(3, 'Mouse', 80, $categoria1, 0, 0);


$itemPedido1= new ItemPedido(1, 0, 2000, 1);
$itemPedido2= new ItemPedido(2, 0, 0, 2);
$itemPedido3= new ItemPedido(3, 100, 800, 1);

$produtos = [];
$produtos[] = $produto1;
$produtos[] = $produto2;
$produtos[] = $produto3;


$pedido1 = new Pedido($produtos, new DateTime, $pagamento1, $endereco1, $itemPedido1, $cliente1);
$pedido1->addProduto($produto1, 2, 2);
$pedido1->addProduto($produto2, 6, 1);

$pedido2 = new Pedido($produtos, new DateTime, $pagamento2, $endereco2, $itemPedido3, $cliente1);
$pedido2->addProduto($produto3, 4, 2);

var_dump($pedido1, $pedido2)

//$p2 = new PagamentoComCartao(1, StatusPagamento::QUITADO, 2);

//$endereco1 = new Endereco(2, 'Rua praia de belas', '20', '516', 'Vila Nova', '530034034', $cidade1);//$cidade1 = new Cidade(2, 'POA', 'RS');
//$endereco1 = new Endereco(2, 'Rua praia de belas', '20', '516', 'Vila Nova', '530034034', $cidade1);
//$categoria1 = new Categoria(1, 'Doce');
//
//
//$itemPedido1= new ItemPedido(1, 23, 25.50, 23);
//$pagamento1 = new PagamentoComCartao(1, StatusPagamento::QUITADO, 5);
//$telefone2 = new Telefone('987234434');

//
//$produto1 = new Produto(1, 'chocolate', 23.00, $categoria1);
//$produto2 = new Produto(2, 'nescau', 12.0, $categoria1);
//$produtos = [];
//$produtos[] = $produto1;
//$produtos[] = $produto2;
//
//
//$pedido1 = new Pedido($produtos, new DateTime, $pagamento1, $endereco1, $itemPedido1, $cliente1);
//$pedido1->addProduto($produto1, 2, 2);
//$pedido1->addProduto($produto2, 6, 1);
//
//var_dump($pedido1);

?>
</pre>
</body>
</html>

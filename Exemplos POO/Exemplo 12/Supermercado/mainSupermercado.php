<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 12</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%;}
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">
    <?php
    require_once 'Supermercado.php';
    echo "<h4>Adicionando produtos ao sistema do supermercado...</h4>";
    $supermercado = new Supermercado();
    $produto1 = new Produto();
    $produto2 = new Produto();
    $produto3 = new Produto();
    $produto4 = new Produto();
    $produto5 = new Produto();
    $produto1->setNome("Arroz Prato Fino 5kg");
    $produto1->setPreco(27.35);
    $produto1->setQuantidadeEmEstoque(60);
    $supermercado->cadastrarProduto($produto1);
    $produto2->setNome("Feijao Carioca Codil 1kg");
    $produto2->setPreco(9.27);
    $produto2->setQuantidadeEmEstoque(100);
    $supermercado->cadastrarProduto($produto2);
    $produto3->setNome("Oleo de Soja Girassol 1L");
    $produto3->setPreco(9.12);
    $produto3->setQuantidadeEmEstoque(50);
    $supermercado->cadastrarProduto($produto3);
    $produto4->setNome("Farinha de Trigo Dona Benta 1kg");
    $produto4->setPreco(5.59);
    $produto4->setQuantidadeEmEstoque(40);
    $supermercado->cadastrarProduto($produto4);
    $produto5->setNome("Leite Integral Itambe 1L");
    $produto5->setPreco(4.69);
    $produto5->setQuantidadeEmEstoque(300);
    $supermercado->cadastrarProduto($produto5);
    echo "<br>";
    echo "<h4><br>Adicionando produtos ao pedido do cliente...</h4>";
    $pedido = new Pedido();
    $produtos = $pedido->getProdutos();
    $produtos[$produto1->getPreco()] = $produto1;
    $quantidade = 1;
    $nome = $produto1->getNome();
    echo "$quantidade $nome foi inserido ao pedido.";
    $produtos[$produto2->getPreco()] = $produto2;
    $quantidade = 1;
    $nome = $produto2->getNome();
    echo "<br>$quantidade $nome foi inserido ao pedido.";
    $produtos[$produto5->getPreco()*6] = $produto5;
    $quantidade = 6;
    $nome = $produto5->getNome();
    echo "<br>$quantidade $nome foi inserido ao pedido.";
    $pedido->setProdutos($produtos);
    $pedido->setTipoPagamento("CARTAO_CREDITO");
    echo $pedido->getValor();
    $supermercado->cadastrarPedido($pedido);
    ?>
</div>
</body>
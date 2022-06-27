<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 14</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Lato", sans-serif;
        }

        div {
            margin: 3% 6%;
        }
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">

    <h1>Cotações Criptomoedas</h1>
    <p>PHP pode consumir APIs externas através da função "file_get_contents", que lê todo
        o arquivo e converte em uma string.<br> Dessa forma, conseguimos utilizar um arquivo
        JSON retornado pela API e convertê-lo em objeto PHP através da função "json_decode".</p>
    <?php
    $urlBTC = "https://www.mercadobitcoin.net/api/BTC/ticker";
    $cotacaoBTC = json_decode(file_get_contents($urlBTC));
    $valorBTC = number_format((float)$cotacaoBTC->ticker->high, 2, '.', '');
    echo "<h4>A maior cotação para a moeda Bitcoin nas últimas 24 horas é de: $valorBTC</h4>";
    $urlETH = "https://www.mercadobitcoin.net/api/ETH/ticker";
    $cotacaoETH = json_decode(file_get_contents($urlETH));
    $valorETH = number_format((float)$cotacaoETH->ticker->high, 2, '.', '');
    echo "<h4>A maior cotação para a moeda Ethereum nas últimas 24 horas é de: $valorETH</h4>";
    $urlDOGE = "https://www.mercadobitcoin.net/api/DOGE/ticker";
    $cotacaoDOGE = json_decode(file_get_contents($urlDOGE));
    $valorDOGE = number_format((float)$cotacaoDOGE->ticker->high, 2, '.', '');
    echo "<h4>A maior cotação para a moeda Dogecoin nas últimas 24 horas é de: $valorDOGE</h4>";
    ?>


</div>
</body>
<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 11</title>
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
    <h1>Passagem de Parâmetros por Referência</h1>

    <p>Quando passamos um parâmetro por referência, todas as modificações feitas na
       variável dentro da função, alteram o valor da variável fora da função.
    <br>Para fazer isso, basta colocar & antes do nome da variável na assinatura do método.</p>
    <?php
        function arrendonda(&$num) {
            $num = round($num);
        }
        $num1 = 3.7;
        $num2 = 4.2;
        echo "<h4>Valor real: num1 = $num1 // num2=$num2</h4>";
        arrendonda($num1);
        arrendonda($num2);
        echo "<h4>Arredondando: num1 = $num1 // num2 = $num2</h4>";
    ?>

</div>
</body>

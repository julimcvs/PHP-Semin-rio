<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%;}
        .echo {color: black}
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1>Funções Aritméticas</h1>
    <p>Em PHP há algumas funções para fazer manipulação de números.</p>
    <?php
        $n1 = 6;
        $n2 = 36;
        $n3 = 3.4;
        echo "<h3>n1 = $n1, n2 = $n2, n3 = $n3<br></h3>";
        echo "<h4 class='echo'>O valor absoluto de n1 é: ".abs($n1);
        echo "<br>n1 ao quadrado é: ".pow($n1,2);
        echo "<br>A raíz quadrada de n2 é: ".sqrt($n2);
        echo "<br>Arredondando n3 temos: ".round($n3);
        echo "<br>A parte inteira de n3 é: ".intval($n3--)."</h4>";
    ?>
</div>
</body>

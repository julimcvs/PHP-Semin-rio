<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 5</title>
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
    <h1>Tipo Referência</h1>
    <p>Em PHP, podemos usar o tipo Referência. O conjunto de valores deste tipo é formado pelos endereços das células de memória.</p>
    <h4><strong>Exemplo de código:</strong></h4>
    <p>$n1 = 5;<br>$n2 = &$n1;<br>$n2++;</p>
    <?php
    $n1 = 5;
    $n2 = &$n1;
    $n2++;
    echo "<h4><strong>Resultado:</strong><br>n1 = $n1 e n2 = $n2</h4>";
    ?>
</div>
</body>
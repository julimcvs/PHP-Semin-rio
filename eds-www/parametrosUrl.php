<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%;}
        #echo {color: black}
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1>Passagem de parâmetros pela URL</h1>
    <p>Com PHP, podemos passar parâmetros pela URL, colocando "?" + "nome do parâmetro = valor"<br>
        Para passar mais de um parâmetro, utilizamos o operador "&" <br>
        Passe os parâmetros a e b pela URL!<br>
        Exemplo: http://127.0.0.1/parametrosUrl.php?a=3&b=2</p>
    <?php
    $param1 = $_GET["a"];
    $param2 = $_GET["b"];
    $resultado = $param1 + $param2;
    echo "<h2 id='echo'>A soma dos parâmetros é: $resultado<br></h2>";
    ?>
</div>
</body>




<!DOCTYPE html>
<html lang="pt-br">
</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%}
        .echo {color: black}
    </style>
</head>
<body>
    <div class="w3-container w3-red w3-center" style="padding:128px 16px">
        <h1>Exemplo 1: Hello World</h1>
        <p>No PHP, usamos o comando "echo" para enviar para a saída qualquer informação,
            podendo conter texto, números ou variáveis.</p>
        <?php
            echo "<p class= 'echo'> Hello World!</p>"
        ?>
    </div>
</body>
</html>

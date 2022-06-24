<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%;}
        .echo {color: black;}
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1>Variáveis de Variáveis</h1>
    <p>Em PHP, podemos criar variáveis de variáveis. Nesse caso, o nome da variável é dinâmico, e irá receber o conteúdo de outra variável.</p>
    <h4><strong>Exemplo de código:</strong></h4>
    <p>$materia = "POO";<br>$$materia = "PHP";</p>
    <?php
        $materia = "POO";
        $$materia = "PHP";
    echo "<h4><strong>Resultado:</strong><br>materia = $materia e POO = $POO</h4>";
    ?>
</div>
</body>
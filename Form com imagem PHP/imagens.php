<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">



    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        div {margin: 3% 6%;}
        .echo {color: black}
    </style>
</head>
<body>

<div class="w3-container w3-red w3-center" style="padding:128px 16px">
    <?php
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $materias = $_POST["materias"];
    if(!empty($_FILES["foto"]['tmp_name']) && file_exists($_FILES["foto"]['tmp_name'])){
        $foto = file_get_contents($_FILES["foto"]['tmp_name']);
        echo "<i>$foto</i>";
    }
    echo "<p>Nome: $nome</p>";
    echo "<p>Curso: Engenharia de Computação</p>";
    echo "<p>Matrícula: $matricula";
    ?>

    <br><br><a href="imagens.html"><button class="w3-button w3-hover-white" style="background-color: #d0c2c2">Voltar</button></a>
</div>
</body>

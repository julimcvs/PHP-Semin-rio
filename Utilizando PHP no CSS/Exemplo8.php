<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <?php
        $nome = $_GET["nome"];
        $fonte = $_GET["fonte"];
        $tamanho = $_GET["tamanho"];
        $cor = $_GET["cor"];
        $lp = $_GET["lp"];
    ?>

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Lato", sans-serif;
        }

        div {
            margin: 3% 6%;
        }

        .echo {
            color: black
        }

        .w3-container {
            background-color: <?php echo $cor?>;
        }

        .nome {
            font-family: <?php echo $fonte?>;
            font-size: <?php echo $tamanho?>
        }

        ;
    </style>
</head>
<body>

<div class="w3-container w3-center" style="padding:128px 16px">
    <?php
    echo "<h3 class='nome'>$nome</h3>";
    echo "<i class='$lp' id='favLp' style='font-size: 200px; border-radius: 15px'></i>";
    ?>
    <br><br><a href="Exemplo8.html">
        <button class="w3-button w3-hover-white" style="background-color: #d0c2c2">Voltar</button>
    </a>
</div>
</body>

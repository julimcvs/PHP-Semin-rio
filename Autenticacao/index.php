<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 15</title>
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
    <h1>Sistema de Autenticação em PHP</h1>
    <p>Podemos usar a variável superglobal $_SESSION para realizar autenticação em PHP.</p>
    <p>Com autenticação, os dados não são perdidos quando atualizamos a página.</p>
    <?php
        if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])) {
                $login = 'julio';
                $senha = '909091';
                $loginFormulario = $_POST['login'];
                $senhaFormulario = $_POST['senha'];
                if($login == $loginFormulario && $senha == $senhaFormulario){
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                } else {
                    echo "Usuário ou senha incorretos.";
                }
            }
            include ("login.php");
        } else {
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include ("home.php");
        }
    ?>
</div>
</body>

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

    <?php
    function calcular()
    {
        $args = func_get_args();
        $numArgs = func_num_args();
        $operador = func_get_arg(0);
        $resultado = 0;
        for ($i = 1; $i < $numArgs; $i++) {
            switch ($operador) {
                case "*":
                    if ($i == 1 && $resultado == 0) {
                        $resultado = func_get_arg($i);
                        break;
                    }
                    $resultado *= func_get_arg($i);
                    break;
                case "/":
                    if ($i == 1 && $resultado == 0) {
                        $resultado = func_get_arg($i);
                        break;
                    }
                    $resultado /= func_get_arg($i);
                    break;
                case "+":
                    $resultado += func_get_arg($i);
                    break;
                case "-":
                    $resultado -= func_get_arg($i);
                    break;
                default:
                    break;
            }
        }
        return $resultado;
    }

    $resultado = calcular('/', 344, 2, 5, 8);
    echo "resultado = calcular('/', 344, 2, 5, 8);";
    echo "<input type='text' value='Resultado: $resultado'/>";
    ?>


</div>
</body>
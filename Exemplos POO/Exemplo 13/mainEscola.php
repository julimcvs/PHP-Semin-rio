<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<head>
    <meta charset="utf-8">
    <title>Exemplo 13</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';

    $professor1 = new Professor();
    $aluno1 = new Aluno();
    $aluno2 = new Aluno();
    $aluno3 = new Aluno();
    $aluno4 = new Aluno();
    $aluno5 = new Aluno();
    $aluno6 = new Aluno();
    $aluno7 = new Aluno();
    $aluno1->setNome("Júlio César");
    $aluno2->setNome("Rafael Lima");
    $aluno3->setNome("Gabriela Guerra");
    $aluno4->setNome("Jorge Hiroki");
    $aluno5->setNome("Pablo Vasconcelos");
    $aluno6->setNome("Mariana Gurgel");
    $aluno7->setNome("Marcelle Ranyelle");
    $aluno1->setCpf("023.249.010-48");
    $aluno2->setCpf("256.886.680-24");
    $aluno3->setCpf("973.336.140-26");
    $aluno4->setCpf("940.238.670-04");
    $aluno5->setCpf("565.877.410-10");
    $aluno6->setCpf("335.672.300-69");
    $aluno7->setCpf("337.952.950-84");

    $materias1 = array();
    $materias1[67] = "Linguagens de Programacao";
    $materias1[71] = "Laboratorio de Linguagens de Programacao";
    $materias1[90] = "AEDS II";
    $materias1[95] = "Laboratorio de AEDS II";
    $aluno1->setMaterias($materias1);

    $materias2 = array(); //Rafael
    $materias2[85] = "Linguagens de Programacao";
    $materias2[70] = "Laboratorio de Linguagens de Programacao";
    $materias2[100] = "AEDS II";
    $materias2[94] = "Laboratorio de AEDS II";
    $aluno2->setMaterias($materias2);

    $materias3 = array(); //Gabs
    $materias3[70] = "Linguagens de Programacao";
    $materias3[71] = "Laboratorio de Linguagens de Programacao";
    $materias3[96] = "AEDS II";
    $materias3[90] = "Laboratorio de AEDS II";
    $aluno3->setMaterias($materias3);

    $materias4 = array(); //Jorge
    $materias4[63] = "Linguagens de Programacao";
    $materias4[86] = "Laboratorio de Linguagens de Programacao";
    $materias4[100] = "AEDS II";
    $materias4[93] = "Laboratorio de AEDS II";
    $aluno4->setMaterias($materias4);

    $materias5 = array(); //Pablo
    $materias5[78] = "Linguagens de Programacao";
    $materias5[86] = "Laboratorio de Linguagens de Programacao";
    $materias5[99] = "AEDS II";
    $materias5[93] = "Laboratorio de AEDS II";
    $aluno5->setMaterias($materias5);

    $materias6 = array(); //Mari
    $materias6[83] = "Linguagens de Programacao";
    $materias6[75] = "Laboratorio de Linguagens de Programacao";
    $materias6[83] = "AEDS II";
    $materias6[97] = "Laboratorio de AEDS II";
    $aluno6->setMaterias($materias6);

    $materias7 = array(); //Marcelle
    $materias7[98] = "Linguagens de Programacao";
    $materias7[68] = "Laboratorio de Linguagens de Programacao";
    $materias7[95] = "AEDS II";
    $materias7[93] = "Laboratorio de AEDS II";
    $aluno7->setMaterias($materias7);

    $professor = new Professor();

    $professor->setNome("Andrei Rimsa");
    $professor->setCpf("132.773.880-50");
    $professor->setMateria("Linguagens de Programacao");

    $notas = array();
    $notas[67] = $aluno1->getNome();
    $notas[85] = $aluno2->getNome();
    $notas[70] = $aluno3->getNome();
    $notas[63] = $aluno4->getNome();
    $notas[78] = $aluno5->getNome();
    $notas[83] = $aluno6->getNome();
    $notas[98] = $aluno7->getNome();
    $professor->setAlunos($notas);

    $mediaAluno1 = $aluno1->mediaNotas();
    $nome = $aluno1->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno1";
    $nome = $aluno2->getNome();
    $mediaAluno2 = $aluno2->mediaNotas();
    echo "<br>A média do aluno $nome é $mediaAluno2";
    $mediaAluno3 = $aluno3->mediaNotas();
    $nome = $aluno3->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno3";
    $mediaAluno4 = $aluno4->mediaNotas();
    $nome = $aluno4->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno4";
    $mediaAluno5 = $aluno5->mediaNotas();
    $nome = $aluno5->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno5";
    $mediaAluno6 = $aluno6->mediaNotas();
    $nome = $aluno6->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno6";
    $mediaAluno7 = $aluno7->mediaNotas();
    $nome = $aluno7->getNome();
    echo "<br>A média do aluno $nome é $mediaAluno7";

    $mediaProfessor = $professor->mediaNotas();
    $nome = $professor->getNome();
    $materia = $professor->getMateria();
    echo "<br>A média do professor $nome na matéria $materia é $mediaProfessor";
    ?>
</div>
</body>
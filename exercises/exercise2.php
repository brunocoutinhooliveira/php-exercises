<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2. Média de Três Notas:</title>
</head>

<body>
    <h3>
        Crie um programa que receba três notas de um aluno através da entrada e calcule a sua média. <br>
        O programa deve imprimir a média na tela e informar se o aluno foi aprovado ou reprovado, considerando a média mínima para aprovação como 7. <br>
    </h3>

    <?php
    $notas = [3.5, 6.0, 9.5];
    $media = array_sum($notas) / count($notas);

    echo "Média: " . number_format($media, 2) . "<br>";
    echo $media >= 7 ? "Aprovado" : "Reprovado";
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
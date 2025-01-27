<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1. Troca de Variáveis:</title>
</head>

<body>
    <h3>
        Escreva um programa que armazene o valor 10 em uma variável A e 20 em uma outra variável B. <br>
        Utilize apenas atribuições entre variáveis para trocar seus conteúdos, fazendo com que o valor que está em A passe para B e vice-versa. <br>
        Ao final, imprima os valores nas variáveis.
    </h3>

    <?php
    $a = 10;
    $b = 20;

    $c = $a;
    $a = $b;
    $b = $c;

    echo "A = $a e B = $b";
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>
</body>

</html>
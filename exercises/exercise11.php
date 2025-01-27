<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11. Fatorial de um Número:</title>
</head>

<body>
    <h3>
        Implemente um programa que calcule e imprima na tela o fatorial de um número inteiro não negativo inserido pelo usuário. <br>
        O fatorial de um número é definido como o produto de todos os números inteiros positivos menores ou iguais a ele. <br>
    </h3>

    <h1>Calculadora de Fatorial</h1>

    <form method="post" action="">
        <label for="numero">Digite um número inteiro não negativo:</label>
        <input type="number" name="numero" id="numero" min="0" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

        if ($numero !== false && $numero >= 0) {
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<h1>Resultado</h1>";
            echo "<p>O fatorial de <strong>$numero</strong> é: <strong>$fatorial</strong></p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um número inteiro não negativo válido.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
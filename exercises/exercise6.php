<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6. Sequência de Fibonacci:</title>
</head>

<body>
    <h3>
        Implemente um programa que gere e imprima na tela a sequência de Fibonacci até o n-ésimo termo, onde n é um valor inteiro positivo inserido pelo usuário. <br>
        A sequência de Fibonacci é definida da seguinte maneira: <br>
        F0 = 0 <br>
        F1 = 1 <br>
        Fn = Fn-1 + Fn-2, para n > 1 <br>
    </h3>

    <h1>Gerador de Sequência de Fibonacci</h1>

    <form method="post" action="">
        <label for="n">Digite um número inteiro positivo (n):</label>
        <input type="number" name="n" id="n" min="1" required>
        <br><br>
        <button type="submit">Gerar Sequência</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $n = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);

        if ($n !== false && $n > 0) {
            echo "<h1>Sequência de Fibonacci até o termo $n</h1>";

            $fibonacci = [0, 1];

            for ($i = 2; $i < $n; $i++) {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }

            echo "<p>" . implode(", ", array_slice($fibonacci, 0, $n)) . "</p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um número inteiro positivo válido.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
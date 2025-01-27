<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12. MDC e MMC:</title>
</head>

<body>
    <h3>
        Crie um programa que calcule o Máximo Divisor Comum (MDC) e o Mínimo Múltiplo Comum (MMC) de dois números inteiros positivos inseridos pelo usuário. <br>
        O programa deve imprimir na tela os valores do MDC e do MMC dos dois números. <br>
    </h3>

    <h1>Calculadora de MDC e MMC</h1>

    <form method="post" action="">
        <label for="numero1">Digite o primeiro número inteiro positivo:</label>
        <input type="number" name="numero1" id="numero1" min="1" required>
        <br><br>
        <label for="numero2">Digite o segundo número inteiro positivo:</label>
        <input type="number" name="numero2" id="numero2" min="1" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php

    function calcularMDC($a, $b)
    {
        while ($b != 0) {
            $resto = $a % $b;
            $a = $b;
            $b = $resto;
        }
        return $a;
    }

    function calcularMMC($a, $b)
    {
        $mdc = calcularMDC($a, $b);
        return ($a * $b) / $mdc;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_VALIDATE_INT);
        $numero2 = filter_input(INPUT_POST, 'numero2', FILTER_VALIDATE_INT);

        if ($numero1 !== false && $numero2 !== false && $numero1 > 0 && $numero2 > 0) {
            $mdc = calcularMDC($numero1, $numero2);
            $mmc = calcularMMC($numero1, $numero2);

            echo "<h1>Resultados</h1>";
            echo "<p>Os números inseridos são: <strong>$numero1</strong> e <strong>$numero2</strong></p>";
            echo "<p><strong>MDC:</strong> $mdc</p>";
            echo "<p><strong>MMC:</strong> $mmc</p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira dois números inteiros positivos válidos.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
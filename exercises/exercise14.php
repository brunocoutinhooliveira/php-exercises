<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14. Sequência de Números Primos:</title>
</head>

<body>
    <h3>
        Desenvolva um programa que gere e imprima na tela uma sequência de números primos até um limite especificado pelo usuário. <br>
        O programa deve mostrar quantos números primos foram encontrados até o limite e qual o maior número primo encontrado. <br>
    </h3>

    <h1>Gerador de Sequência de Números Primos</h1>

    <form method="post" action="">
        <label for="limite">Digite o limite para a sequência de números primos:</label>
        <input type="number" name="limite" id="limite" min="1" required>
        <br><br>
        <button type="submit">Gerar Sequência</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($primos)): ?>
        <h2>Resultado:</h2>
        <p>Limite: <strong><?= $limite ?></strong></p>
        <p>Números primos encontrados: <strong><?= $quantidadePrimos ?></strong></p>
        <p>Maior número primo: <strong><?= $maiorPrimo ?></strong></p>
        <p>Sequência de números primos: <strong><?= implode(", ", $primos) ?></strong></p>
    <?php endif; ?>

    <?php
    
    function verificarPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $limite = filter_input(INPUT_POST, 'limite', FILTER_VALIDATE_INT);

        if ($limite !== false && $limite > 0) {
            $primos = [];
            for ($i = 2; $i <= $limite; $i++) {
                if (verificarPrimo($i)) {
                    $primos[] = $i;
                }
            }

            $quantidadePrimos = count($primos);
            $maiorPrimo = end($primos);

            echo "<h1>Sequência de Números Primos</h1>";
            echo "<p>Limite: <strong>$limite</strong></p>";
            echo "<p>Números primos encontrados: <strong>$quantidadePrimos</strong></p>";
            echo "<p>Maior número primo: <strong>$maiorPrimo</strong></p>";
            echo "<p>Sequência de números primos: <strong>" . implode(", ", $primos) . "</strong></p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um limite inteiro positivo válido.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
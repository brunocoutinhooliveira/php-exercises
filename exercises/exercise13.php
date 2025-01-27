<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13. Primo ou Composto:</title>
</head>

<body>
    <h3>
        Crie um programa que verifique se um número inteiro positivo inserido pelo usuário é primo ou composto. <br>
        Um número primo é aquele que possui apenas dois divisores positivos: 1 e ele mesmo. <br>
        O programa deve imprimir na tela se o número é primo ou composto. <br>
    </h3>
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
        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

        if ($numero !== false && $numero > 0) {
            if (verificarPrimo($numero)) {
                $resultado = "O número <strong>$numero</strong> é <strong>primo</strong>.";
            } else {
                $resultado = "O número <strong>$numero</strong> é <strong>composto</strong>.";
            }
        } else {
            $resultado = "<p style='color: red;'>Por favor, insira um número inteiro positivo válido.</p>";
        }
    }
    ?>

    <h1>Verificador de Números Primos</h1>

    <form method="post" action="">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <h2>Resultado:</h2>
        <p><?= $resultado ?></p>
    <?php endif; ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
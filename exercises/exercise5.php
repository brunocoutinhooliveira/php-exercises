<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5. Par ou Ímpar:</title>
</head>

<body>
    <h3>
        Crie um programa que receba um número inteiro do usuário e verifique se ele é par ou ímpar. <br>
        O programa deve imprimir na tela se o número é par ou ímpar. <br>
    </h3>

    <h1>Verificador de Par ou Ímpar</h1>

    <form method="post" action="">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

        if ($numero !== false && $numero > 0) {

            $resultado = ($numero % 2 === 0) ? "par" : "ímpar";

            echo "<h1>Resultado</h1>";
            echo "<p>O número <strong>$numero</strong> é <strong>$resultado</strong>.</p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um número inteiro válido.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>
</body>

</html>
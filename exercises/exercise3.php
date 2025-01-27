<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3. Tabuada:</title>
</head>

<body>
    <h3>
        Desenvolva um programa que gere e imprima na tela a tabuada de multiplicação de um número inteiro positivo inserido pelo usuário. <br>
        A tabuada deve ir de 1 a 10. <br>
    </h3>
    <h1>Gerador de Tabuada</h1>
    <form method="post" action="">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

        if ($numero !== false && $numero > 0) {
            echo "<h1>Tabuada do número $numero</h1>";
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um número inteiro positivo válido.</p>";
        }
    }
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>
</body>

</html>
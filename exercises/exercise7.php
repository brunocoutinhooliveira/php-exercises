<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7. Classificação de Triângulos:</title>
</head>

<body>
    <h3>
        Crie um programa que receba os comprimentos dos lados de um triângulo do usuário e classifique-o como triângulo equilátero, isósceles ou escaleno. <br>
        O programa deve imprimir na tela a classificação do triângulo. <br>
    </h3>
    <h1>Classificador de Triângulos</h1>
    <form method="post" action="">
        <label for="lado1">Digite o comprimento do lado 1:</label>
        <input type="number" step="0.1" name="lado1" id="lado1" required>
        <br><br>
        <label for="lado2">Digite o comprimento do lado 2:</label>
        <input type="number" step="0.1" name="lado2" id="lado2" required>
        <br><br>
        <label for="lado3">Digite o comprimento do lado 3:</label>
        <input type="number" step="0.1" name="lado3" id="lado3" required>
        <br><br>
        <button type="submit">Classificar Triângulo</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lado1 = filter_input(INPUT_POST, 'lado1', FILTER_VALIDATE_FLOAT);
        $lado2 = filter_input(INPUT_POST, 'lado2', FILTER_VALIDATE_FLOAT);
        $lado3 = filter_input(INPUT_POST, 'lado3', FILTER_VALIDATE_FLOAT);

        if ($lado1 !== false && $lado2 !== false && $lado3 !== false && $lado1 > 0 && $lado2 > 0 && $lado3 > 0) {

            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {

                if ($lado1 === $lado2 && $lado1 === $lado3) {
                    $classificacao = "Equilátero";
                } elseif ($lado1 === $lado2 || $lado1 === $lado3 || $lado2 === $lado3) {
                    $classificacao = "Isósceles";
                } else {
                    $classificacao = "Escaleno";
                }

                echo "<h1>Classificação do Triângulo</h1>";
                echo "<p>O triângulo é: <strong>$classificacao</strong></p>";
            } else {
                echo "<p style='color: red;'>Os valores inseridos não formam um triângulo válido.</p>";
            }
        } else {
            echo "<p style='color: red;'>Por favor, insira valores válidos e positivos para os lados.</p>";
        }
    }
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
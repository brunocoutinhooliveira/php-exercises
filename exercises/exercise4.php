<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4. Cálculo de IMC:</title>
</head>

<body>
    <h3>
        Elabore um programa que solicite ao usuário seu peso e altura e, em seguida, calcule e exiba na tela o seu Índice de Massa Corporal (IMC). <br>
        Utilize as seguintes faixas para classificar o IMC: <br>
        Abaixo de 18,5: Magreza <br>
        Entre 18,5 e 24,9: Peso normal <br>
        Entre 25 e 29,9: Sobrepeso <br>
        Acima de 30: Obesidade <br>
    </h3>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        <label for="peso">Digite seu peso (kg):</label>
        <input type="number" step="0.1" name="peso" id="peso" min="1" required>
        <br><br>
        <label for="altura">Digite sua altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" min="0.1" required>
        <br><br>
        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
        $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);

        if ($peso !== false && $altura !== false && $peso > 0 && $altura > 0) {

            $imc = $peso / ($altura ** 2);
            $imc = number_format($imc, 2);

            if ($imc < 18.5) {
                $classificacao = "Magreza";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                $classificacao = "Sobrepeso";
            } elseif ($imc > 29.9) {
                $classificacao = "Obesidade";
            } else {
                $classificacao = "Submeta os valores para calculo.";
            }

            echo "<h1>Resultado do IMC</h1>";
            echo "<p>Seu IMC é: <strong>$imc</strong></p>";
            echo "<p>Classificação: <strong>$classificacao</strong></p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira valores válidos para peso e altura.</p>";
        }
    }
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>
</body>

</html>
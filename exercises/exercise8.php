<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8. Conversão de Temperatura:</title>
</head>

<body>
    <h3>
        Desenvolva um programa que permita ao usuário converter uma temperatura de Celsius para Fahrenheit e vice-versa. <br>
        O programa deve solicitar ao usuário a temperatura a ser convertida e a unidade de origem (Celsius ou Fahrenheit) <br>
        e, em seguida, imprimir na tela a temperatura convertida na unidade desejada. <br>
    </h3>

    <h1>Conversor de Temperatura</h1>
    <form method="post" action="">
        <label for="temperatura">Digite a temperatura:</label>
        <input type="number" step="0.1" name="temperatura" id="temperatura" required>
        <br><br>
        <label for="unidade">Selecione a unidade de origem:</label>
        <select name="unidade" id="unidade" required>
            <option value="C">Celsius (°C)</option>
            <option value="F">Fahrenheit (°F)</option>
        </select>
        <br><br>
        <button type="submit">Converter</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $temperatura = filter_input(INPUT_POST, 'temperatura', FILTER_VALIDATE_FLOAT);
        $unidade = $_POST['unidade'] ?? '';

        if ($temperatura !== false && in_array($unidade, ['C', 'F'])) {
            if ($unidade === 'C') {

                $convertida = ($temperatura * 9 / 5) + 32;
                $unidadeConvertida = 'Fahrenheit';
            } else {

                $convertida = ($temperatura - 32) * 5 / 9;
                $unidadeConvertida = 'Celsius';
            }

            echo "<h1>Resultado da Conversão</h1>";
            echo "<p>A temperatura convertida é: <strong>" . number_format($convertida, 2) . "° $unidadeConvertida</strong></p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira uma temperatura válida e selecione uma unidade.</p>";
        }
    }
    ?>
    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
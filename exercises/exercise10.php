<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10. Calculadora de Juros Simples:</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8-beta.0/inputmask.min.js"></script>
    <script src="../assets/scripts.js"></script>
</head>

<body>
    <h3>
        Elabore um programa que calcule o valor final de um investimento com juros simples. <br>
        O programa deve solicitar ao usuário o valor inicial do investimento, a taxa de juros anual e o tempo de aplicação em anos. <br>
        O programa deve imprimir na tela o valor final do investimento após o período especificado. <br>
    </h3>

    <h1>Calculadora de Juros Simples</h1>
    <form method="post" action="">
        <label for="valor_inicial">Valor inicial do investimento (R$):</label>
        <input type="number" step="0.01" name="valor_inicial" id="valor_inicial" required>
        <br><br>
        <label for="taxa_juros">Taxa de juros anual (%):</label>
        <input type="number" step="0.01" name="taxa_juros" id="taxa_juros" required>
        <br><br>
        <label for="tempo_anos">Tempo de aplicação (anos):</label>
        <input type="number" name="tempo_anos" id="tempo_anos" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor_inicial = filter_input(INPUT_POST, 'valor_inicial', FILTER_VALIDATE_FLOAT);
        $taxa_juros = filter_input(INPUT_POST, 'taxa_juros', FILTER_VALIDATE_FLOAT);
        $tempo_anos = filter_input(INPUT_POST, 'tempo_anos', FILTER_VALIDATE_INT);

        if ($valor_inicial !== false && $taxa_juros !== false && $tempo_anos !== false && $valor_inicial > 0 && $taxa_juros > 0 && $tempo_anos > 0) {

            $valor_final = $valor_inicial * (1 + ($taxa_juros / 100) * $tempo_anos);

            echo "<h1>Resultado do Investimento</h1>";
            echo "<p>Valor inicial: R$ " . number_format($valor_inicial, 2, ',', '.') . "</p>";
            echo "<p>Taxa de juros anual: " . number_format($taxa_juros, 2, ',', '.') . "%</p>";
            echo "<p>Tempo de aplicação: $tempo_anos ano(s)</p>";
            echo "<p><strong>Valor final: R$ " . number_format($valor_final, 2, ',', '.') . "</strong></p>";
        } else {
            echo "<p style='color: red;'>Por favor, insira valores válidos e positivos para todos os campos.</p>";
        }
    }
    ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
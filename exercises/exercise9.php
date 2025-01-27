<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9. Jogo da Advinhação:</title>
</head>

<body>
    <h3>
        Crie um programa que gere um número aleatório entre 1 e 100 e desafie o usuário a adivinhá-lo. <br>
        O programa deve fornecer dicas ao usuário, informando se o seu palpite está acima, abaixo ou igual ao número secreto. <br>
        O jogo deve terminar quando o usuário acertar o número ou atingir um limite máximo de tentativas predefinido. <br>
    </h3>

    <?php
    session_start();

    if (!isset($_SESSION['numero_secreto'])) {
        $_SESSION['numero_secreto'] = random_int(1, 100);
        $_SESSION['tentativas'] = 0;
        $_SESSION['limite_tentativas'] = 10;
    }

    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $palpite = filter_input(INPUT_POST, 'palpite', FILTER_VALIDATE_INT);

        if ($palpite !== false) {
            $_SESSION['tentativas']++;

            if ($palpite === $_SESSION['numero_secreto']) {
                $mensagem = "🎉 Parabéns! Você acertou o número secreto ({$_SESSION['numero_secreto']}) em {$_SESSION['tentativas']} tentativa(s)!";

                session_unset();
            } elseif ($_SESSION['tentativas'] >= $_SESSION['limite_tentativas']) {
                $mensagem = "❌ Você atingiu o limite máximo de tentativas. O número secreto era {$_SESSION['numero_secreto']}.";

                session_unset();
            } elseif ($palpite < $_SESSION['numero_secreto']) {
                $mensagem = "📉 Seu palpite está abaixo do número secreto.";
            } else {
                $mensagem = "📈 Seu palpite está acima do número secreto.";
            }
        } else {
            $mensagem = "⚠️ Por favor, insira um número válido.";
        }
    }
    ?>

    <h1>Jogo da Adivinhação</h1>
    <p>Estou pensando em um número entre 1 e 100. Você consegue adivinhar qual é?</p>
    <p>Você tem um máximo de <?= $_SESSION['limite_tentativas'] ?? 10 ?> tentativas!</p>

    <?php if (!empty($mensagem)): ?>
        <p><strong><?= $mensagem ?></strong></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['numero_secreto'])): ?>
        <form method="post" action="">
            <label for="palpite">Seu palpite:</label>
            <input type="number" name="palpite" id="palpite" min="1" max="100" required>
            <br><br>
            <button type="submit">Enviar Palpite</button>
        </form>
        <p>Tentativa atual: <?= $_SESSION['tentativas'] ?> de <?= $_SESSION['limite_tentativas'] ?></p>
    <?php else: ?>
        <form method="post" action="">
            <button type="submit">Jogar Novamente</button>
        </form>
    <?php endif; ?>

    <br><br><br>
    <a href="http://localhost:8000">Retornar</a>

</body>

</html>
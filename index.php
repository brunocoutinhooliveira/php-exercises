<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <h1>PHP Exercises</h1>
    <ul>
        <?php for ($i = 1; $i <= 14; $i++) { ?>
            <li><a href="exercises/exercise<?= $i ?>.php">Exercise <?= $i ?></a></li>
        <?php } ?>
    </ul>

</body>

</html>
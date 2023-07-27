<?php
    $x = 1;
    $base = 3;
    $users = ["Juan", "Denis", "Romina", "Noelia", "Daniel", "Emmanuel"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <h2>Uso de For</h2>
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li><?= $i ?></li>
        <?php endfor; ?>
    </ul>

    <h2>Uso de While</h2>
    <ul>
        <?php while ($x <= 10) : ?>
            <li><?= $base, " * ", $x, " = ", $base * $x ?></li>
            <?php $x += 1; ?>
        <?php endwhile; ?>
    </ul>

    <h2>Lista de usuarios con Foreach</h2>
    <ul>
        <?php foreach ($users as $key => $user): ?>
            <li><?= $key, " ", $user ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
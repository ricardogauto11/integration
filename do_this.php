<?php
    $table = array();

    for ($i = 1; $i <= 10; $i++) {
        $value = 9 * $i;
        $res = "9 * $i = $value";

        array_push($table, $res);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacer esto con el codigo PHP</title>
</head>
<body>
    <h2>Tabla del 9</h2>
    <ul>
        <?php foreach ($table as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
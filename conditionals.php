<?php
    $talking_about_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h2>Esto no se debe hacer</h2>
    <?php if ($talking_about_bruno) {
        echo '🤫';
    } else {
        echo '🥳';
    } ?>

    <h2>Esto es aceptable</h2>
    <?php if ($talking_about_bruno) { ?>
        <i>🥲</i>
    <?php } else { ?>
        <i>🤓</i>
    <?php } ?>

    <h2>Esto es lo correcto</h2>
    <?php if ($talking_about_bruno) : ?>
        <b>😣</b>
    <?php else : ?>
        <b>😆</b>
    <?php endif; ?>
</body>
</html>
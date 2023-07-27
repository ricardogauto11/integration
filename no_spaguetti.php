<?php
    $a = 'A';
    $b = 'A';
    $cheese = 'tool';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evita codigo espaguetti</title>
</head>
<body>
    <?php if($a == $b): ?>
        <div class="card">
            <span class="hour">00:00</span>
            <?php if ($cheese == 'tool'): ?>
                <ul>
                    <li>Uno</li>
                    <li>Dos</li>
                </ul>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <p>No hay resultados</p>
    <?php endif; ?>
</body>
</html>
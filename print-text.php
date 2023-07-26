<?php
  $name = 'Luna';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imprimiendo texto y etiquetas con PHP</title>
</head>
<body>
  <?php echo "<p><b>Etiqueta negrita</b></p>"; ?>

  <?= "<i>Esta es otra sintaxis de etiquetas PHP</i>" ?>
  <p>Tengo una mascota que se llama <?= $name ?></p>
</body>
</html>
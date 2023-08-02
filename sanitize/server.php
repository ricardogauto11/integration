<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $s_first_name = htmlentities($first_name);
    $s_last_name = addslashes($last_name);
    $s_username = preg_replace("/\d/", "", $username); // sin numeros
    $s_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $s_age = preg_replace("/\D/", "", $age); // solo numeros
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <section>
        <article>
            <span>Nombre: <?= $s_first_name ?></span>
            <span>Apellido: <?= $s_last_name ?></span>
            <span>Username sin numeros: <?= $s_username ?></span>
            <span>Email: <?= $email ?></span>
            <span>Age: <?= $s_age ?></span>
        </article>
    </section>
</body>
</html>
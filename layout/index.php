<?php
    require "mail.php";

    function validate($name, $email, $subject, $message, $btn_submit)
    {
        return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
    }

    $status = "";

    if (isset($_POST['btn_submit']))
    {
        if (validate(...$_POST))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $body = "$name <$email> te ha enviado el siguiente mensaje: <br> $message";
    
            // Send email
            sendMail($name, $email, $subject, $body, true);
    
            $status = "success";
        } else {
            $status = "danger";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <?php if($status == 'danger'): ?>
        <div class="alert danger">
            <span>Surgio un problema!</span>
        </div>
    <?php endif; ?>
    <?php if($status == 'success'): ?>
        <div class="alert success">
            <span>Mensaje enviado con exito!</span>
        </div>
    <?php endif; ?>

    <form action="./" method="post">
        <h2>Contactanos!</h2>

        <div class="input-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">Asunto</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="btn_submit" type="submit">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span>
                    <i class="fa-solid fa-house-chimney"></i>
                    Godoy Cruz, Corrientes, Corrientes
                </span>
            </div>
            <div class="info">
                <span>
                    <i class="fa-solid fa-mobile-screen"></i>
                    +5493794123456
                </span>
            </div>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/bd50963d3b.js" crossorigin="anonymous"></script>
</body>

</html>
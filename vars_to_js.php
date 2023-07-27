<?php
    $users = array(
        array(
            "id" => 1,
            "username" => 'Juan'
        ),
        array(
            "id" => 2,
            "username" => "Daniel"
        ),
        array(
            "id" => 3,
            "username" => "Romina"
        ),
        array(
            "id" => 4,
            "username" => "Noelia"
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables desde PHP a JS</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($users) ?>')
        console.log(users)
    </script>
</body>
</html>
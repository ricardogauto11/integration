<?php
    if (isset($_POST['simple']) && !empty($_POST['simple'])) {
        echo "Hola {$_POST['simple']}";
    } else {
        echo "El campo esta indefinido o no contiene valor";
    }
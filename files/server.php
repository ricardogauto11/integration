<?php
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filetmp = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];

    echo "El nombre del archivo es $filename <br>";
    echo "El tipo de archivo es $filetype <br>";
    echo "La carpeta temporal es $filetmp <br>";
    echo "El tamano del archivo es $filesize bytes <br>";
<?php
    require('conexion.php');
    $sql = "INSERT INTO parroquias (nombre) VALUES ('{$_GET['nombre-parroquia']}')";
    $resultado =$mysqli->query($sql);
    if ($resultado > 0) {
        echo "Se guardo la parroquia correctamente.";
    } else echo "ocurrio un error.";
?>

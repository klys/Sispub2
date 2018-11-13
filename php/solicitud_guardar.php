<?php
    require('conexion.php');
    $sql = "INSERT INTO solicitud (nombre) VALUES ('{$_GET['nombre-solicitud']}')";
    $resultado =$mysqli->query($sql);
    if ($resultado > 0) {
        echo "Se guardo la Solicitud correctamente.";
    } else echo "ocurrio un error.";
?>

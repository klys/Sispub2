<?php
    require('conexion.php');
    $sql = "INSERT INTO tdp (nombre) VALUES ('{$_GET['nombre-tdp']}')";
    $resultado =$mysqli->query($sql);
    if ($resultado > 0) {
        echo "Se guardo el Beneficiario correctamente.";
    } else echo "ocurrio un error.";
?>

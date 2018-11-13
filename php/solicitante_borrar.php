<?php
    require('conexion.php');
    $sql = "DELETE FROM solicitantes WHERE ci = '{$_POST['ci']}'";
    $resultado=$mysqli->query($sql);
    
    if ($resultado > 0){
        echo"Se borro al solicitante.";
    } else echo "ocurrio un error.";
?>
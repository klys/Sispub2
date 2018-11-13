<?php
    require('conexion.php');
    $sql = "DELETE FROM solicitud WHERE solicitud_id = {$_POST['solicitud_id']}";
    $resultado=$mysqli->query($sql);
    
    if ($resultado > 0){
        echo"Se borro la Solicitud.";
    } else echo "ocurrio un error.";
?>

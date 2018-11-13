<?php
    require('conexion.php');
    $sql = "DELETE FROM parroquias WHERE parroquia_id = {$_POST['parroquia_id']}";
    $resultado=$mysqli->query($sql);
    
    if ($resultado > 0){
        echo"Se borro la parroquia.";
    } else echo "ocurrio un error.";
?>



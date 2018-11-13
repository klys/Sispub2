<?php
    require('conexion.php');
    $sql = "DELETE FROM tdp WHERE tdp_id = {$_POST['tdp_id']}";
    $resultado=$mysqli->query($sql);
    
    if ($resultado > 0){
        echo"Se borro el Beneficiario.";
    } else echo "ocurrio un error.";
?>

<?php

    require("conexion.php");
    
    $sql = "UPDATE servicios SET Supervisor = '{$_POST['supervisor']}', Fecha_Ejec = '{$_POST['fechaEjecucion']}'  WHERE Numero = {$_POST['numero']}";
    
    $resultado = $mysqli->query($sql);
    if ($resultado){
        echo "guardado con exito";
    } else {
        echo "ocurrio un error";
    }
?>

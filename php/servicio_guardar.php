<?php 
    require ('conexion.php');
    
    $sql = "INSERT INTO servicios (cedula, Tipo_Serv, Observ, Fecha, Usuario, Fecha_Ejec) VALUES ('{$_POST['ci_rif']}', {$_POST['tipo']}, '{$_POST['observacion']}', NOW(), 'USER_CONNECT', '0000-00-00')";
    
    $resultado =$mysqli->query($sql);
    if ($resultado > 0) {
        echo "Se guardo la solicitud de servicio.";
    } else echo "Ocurrio un error..";
    /*
     * ci_rif:$("ci-rif").val(),
            tipo:$("#servicio").val(),
            observacion:$("#observacion").val()
     */
    
?>
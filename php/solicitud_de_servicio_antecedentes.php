<label class = 'label-control'>Solicitudes anteriores</label>

<?php 
    require("conexion.php");
    $sql = "SELECT serv.Numero as solicitud_num, serv.Fecha as fecha, soli.nombre as servicio FROM servicios serv "
            . "INNER JOIN solicitud soli ON serv.Tipo_Serv = soli.solicitud_id "
            . "WHERE serv.cedula = '{$_POST['ci_rif']}' AND serv.Fecha_Ejec = '0000-00-00'";
            
    $resultado = $mysqli->query($sql);
?>

<table class = "table table-bordered">
    <thead>
        <tr>
            <td style='color:rgb(250,0,0)'>Numero</td>
            <td style='color:rgb(250,0,0)'>Servicio</td>
            <td style='color:rgb(250,0,0)'>Fecha</td>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td style = 'color:rgb(250,250,250)'><?php echo $row['solicitud_num']; ?></td>
            <td style = 'color:rgb(250,250,250)'><?php echo $row['servicio']; ?></td>
            <td style = 'color:rgb(250,250,250)'><?php echo $row{'fecha'}; ?></td>
            <td><button type = 'button' onclick="ver_servicioDatos('<?php echo $row['solicitud_num']; ?>')"><span class = 'glyphicon glyphicon-search'></span></button></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

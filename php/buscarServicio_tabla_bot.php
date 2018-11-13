<?php

    require('conexion.php');
        
//    $sql = "SELECT ss.Numero as num, ss.Nombre as nom, ss.cedula as ci, "
//            . "ss.Fecha as fec, sd.nombre as serv FROM servicios ss "
//            . "INNER JOIN solicitud sd on ss.Tipo_Serv= sd.solicitud_id "
//            . "WHERE ss.{$_POST['buscarpor']} like '%{$_POST['termino']}%' AND Tipo_Serv={$_POST['por_servicio']} AND Fecha_Ejec='0000-00-00'";
    
    $sql = "SELECT ss.Numero AS num, sp.Nombre AS nom, ss.cedula AS ci, ss.Fecha AS fec, sd.nombre AS serv
            FROM servicios ss
            INNER JOIN solicitud sd ON ss.Tipo_Serv = sd.solicitud_id
            INNER JOIN solicitantes sp ON sp.CI = ss.cedula
            WHERE sp.{$_POST['buscarpor']} LIKE  '%{$_POST['termino']}%'
            AND Tipo_Serv = {$_POST['por_servicio']}
            AND Fecha_Ejec =  '0000-00-00'";
    
    $resultado = $mysqli->query($sql);
    echo "<label>".$sql."</label>";
?> 
<table class = "table table-hover">
    <thead>
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Cedula</td>
            <td>Fecha</td>
            <td>Servicio</td>
        </tr>
    </thead>
    <tbody>
    <?php while($row=$resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['num']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['ci']; ?></td>
            <td><?php echo $row['fec']; ?></td>
            <td><?php echo $row['serv']; ?></td>
            <!--td><button type = "button" href='#close' onclick = "seleccionarPersona('<?php echo $row['CI']; ?>')"><span class = "glyphicon glyphicon-arrow-left"></span></button></td-->
            <td><a onclick="seleccionarSolicitud('<?php echo $row['num']; ?>')" href ="#close"><span class = "glyphicon glyphicon-arrow-left"></span></a></td>
        </tr>
    <?php } ?>
    </tbody>    
</table>

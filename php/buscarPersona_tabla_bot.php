<?php

    require('conexion.php');
    
    
    $sql = "SELECT sl.CI as cedula, sl.Nombre as persona, tt.nombre as tipoppl FROM solicitantes sl "
            . "INNER JOIN tdp tt ON tt.tdp_id = sl.tipop"
            . " WHERE sl.{$_POST['buscarpor']} like '%{$_POST['termino']}%'";
    
    $resultado = $mysqli->query($sql);
    
?> 
<table class = "table table-hover">
    <thead>
        <tr>
            <td>CI</td>
            <td>Nombre</td>
            <td>Tipo</td>
        </tr>
    </thead>
    <tbody>
    <?php while($row=$resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['persona']; ?></td>
            <td><?php echo $row['tipoppl']; ?></td>
            <!--td><button type = "button" href='#close' onclick = "seleccionarPersona('<?php echo $row['cedula']; ?>')"><span class = "glyphicon glyphicon-arrow-left"></span></button></td-->
            <td><a onclick="seleccionarPersona('<?php echo $row['cedula']; ?>','<?php echo $row['persona']; ?>')" href ="#close"><span class = "glyphicon glyphicon-arrow-left"></span></a></td>
        </tr>
    <?php } ?>
    </tbody>    
</table>
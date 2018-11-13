<?php 
    require("conexion.php");
    $sql = "SELECT solicitud_id, nombre FROM solicitud";
    $resultado = $mysqli->query($sql);
?>
<label>Nueva Solicitud</label>
<form class ="form-horizontal" role ='form'>
    <label class = 'form-control'>Servicio a Solicitar</label> 
    <select id = 'servicio' class = 'form-control'>
        <?php while($row = $resultado->fetch_assoc()) { ?>
            <option value ='<?php echo $row['solicitud_id']; ?>'><?php echo $row['nombre']; ?></option>
        <?php } ?>
    </select>
    
    <label class ='form-control'>Observaciones y notas</label>
    <input class ='form-control' style = 'color:rgb(0,0,0)' id = 'observacion' placeholder="Observaciones y notas">
</form>
<center>
    <button type = 'button' onclick = 'db_solicitudServicio_guardar()' class = 'btn btn-primary'><span class = 'glyphicon glyphicon-floppy-disk'></span>Guardar</button>
</center>

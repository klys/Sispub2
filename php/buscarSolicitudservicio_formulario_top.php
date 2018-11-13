<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$query_tip_s="SELECT solicitud_id, nombre FROM solicitud";	
	// Ejecutamos la Consuta
	$resultado_tip_s=$mysqli->query($query_tip_s);
	//$combo_par="";
    //while ($row_par_c= $resultado_par_c->fetch_assoc()) 
    //{
        //$combo_par =" <option value='".$row_par_c['Nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    //}
	//$query_tip_c="SELECT tdp_id, nombre FROM tdp";	
	// Ejecutamos la Consuta
	//$resultado_tip_c=$mysqli->query($query_tip_c);
        
 ?>
<form class ='form-inline'>
    <label class ="form-control"><span class = 'glyphicon glyphicon-search'></span> </label>
    <select class = "form-control" id = 'buscarpor'>
        <option value ='Nombre'>Nombre</option>
        <option value ='CI'>Cedula</option>
    </select>

    <select class = "form-control" id = 'por_servicio'>
    	<?php while ($row_tip_s= $resultado_tip_s->fetch_assoc()){ ?>
                         <!-- Imprimimos todos los valores de la Base de Datos -->
                        <option value ='<?php echo $row_tip_s['solicitud_id']; ?>'> <?php echo $row_tip_s['nombre']; ?></option>
                <?php } ?>
    </select>
    <input class ="form-control" type = 'text' onkeypress="buscarServicio(this.value)"> 
</form>
<div id ="contenedor-tabla">
    
</div>
<div id ="">
    
</div>

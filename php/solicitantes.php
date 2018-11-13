<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$query_par_c="SELECT parroquia_id, nombre FROM parroquias";	
	// Ejecutamos la Consuta
	$resultado_par_c=$mysqli->query($query_par_c);
	//$combo_par="";
    //while ($row_par_c= $resultado_par_c->fetch_assoc()) 
    //{
        //$combo_par =" <option value='".$row_par_c['Nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    //}
	$query_tip_c="SELECT tdp_id, nombre FROM tdp";	
	// Ejecutamos la Consuta
	$resultado_tip_c=$mysqli->query($query_tip_c);

 ?>
<html>
<head>
	<title>Solicitantes</title>
	<link rel="stylesheet" type="text/css" href="../css/menu_estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/datosparroquia.css" />

</head>
<body>

    <center>
        <ul class="nav nav-tabs" id = 'submenu'>
          <li role="presentation"><a href="javascript:submenu_solicitante_listado()">Listado</a></li>
          <li role="presentation" class="active"><a href="javascript:submenu_solicitante_nuevo()">Agregar</a></li>
        </ul>
        <div class ="row clearfix" id ="subcontenido">
        <form class ="form-horizontal" name="nuevo_usuario" method="POST" action="guardar_solicitante.php">
		
        <div class="form-group">
            <label class="col-sm-3 control-label">C.I. / RIF del Solicitante</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ci-rif" placeholder="Introduzca CI ó Rif" maxlength="15" size="15" onPaste="return false;">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre Solicitante</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="solicitante" placeholder="Nombre(s) y Apellido(s)" maxlength="100" size="100" onPaste="return false;">
            </div>
        </div>                
        <div class="form-group">
            <label class="col-sm-3 control-label">Sector</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sector" placeholder="Sector" maxlength="80" size="80" onPaste="return false;">
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-3 control-label">Direcci&oacute;n</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="direccion" placeholder="Direcci&oacute;n" maxlength="254" size="254" onPaste="return false;">
            </div>
        </div>
        
        <div class="form-group" style = "display: inline;">
            <label class="col-md-3 control-label">Parroquia</label>
            <div class="col-md-9">
            <select name= "parroquia" id ='parroquia' class ="form-control">
                <?php while ($row_par_c= $resultado_par_c->fetch_assoc()){ ?>
                         <!-- Imprimimos todos los valores de la Base de Datos -->
                        <option value = '<?php echo $row_par_c['parroquia_id']; ?>'> <?php echo $row_par_c['nombre']; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        
        <div class="form-group form-inline" style = "padding-top: 15px;">
            <label class="col-sm-3 control-label">Telefono</label>
            <div class="col-sm-9">
            <select id= "codigo-de-area-telefonico" class="form-control">
                <option value = "0414"> 0414 </option>
                <option value = "0424"> 0424 </option>
                <option value = "0416"> 0416 </option>
                <option value = "0426"> 0426 </option>
                <option value = "0269"> 0269 </option>
            </select>
              <input class ="form-control" type="text" id="telefono" placeholder="Telefono Personal" maxlength="7" size="7" onkeypress="return isNumberKey(event)" onPaste="return false;"/>
            </div>
        </div>
       
        <div class="form-group">
            <label class="col-sm-3 control-label">Tipo</label>
            <div class="col-sm-9">
            <select name= "tipo-de-persona" class="form-control" id ="tipo-de-persona">
                <?php while ($row_tip_c= $resultado_tip_c->fetch_assoc()){ ?>
                         <!-- Imprimimos todos los valores de la Base de Datos -->
                        <option value ='<?php echo $row_tip_c['tdp_id']; ?>'> <?php echo $row_tip_c['nombre']; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
            <button type="button" class="btn btn-danger" onclick ="db_solicitantes_guardar()">Guardar</button>
            <button type="button" class="btn btn-primary">Restablecer</button>
        </form>  
        
    </center>

</html>

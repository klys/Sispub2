<?php 
require("conexion.php");
$ejec_ser=$_POST['numero'];
$querys="SELECT cedula, Nombre, Direccion, Tipo_Serv, Fecha, Obser 
FROM servicios WHERE Numero=$ejec_ser";  
    // Ejecutamos la Consuta
    $resultados=$mysqli->query($querys);
    $row_r= $resultados->fetch_assoc();
?>
<html>
<head>
	<title>Solicitud</title>
	<link rel="stylesheet" type="text/css" href="../css/menu_estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/datosparroquia.css" />

</head>
<body>

    <center>
       
        <div class ="row clearfix" id ="subcontenido">
        <form class ="form-horizontal" name="nuevo_usuario" method="POST" action="">
		
        <div class="form-group">
            <label class="col-sm-3 control-label">Solicitud</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sol"  readonly="readonly" value="'<?php echo $row_r['solicitud_id']; ?>'">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Cedula</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ci" readonly="readonly" value="'<?php echo $row_r['cedula']; ?>'">
            </div>
        </div>                
        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nombre" readonly="readonly"value="'<?php echo $row_r['Nombre']; ?>'">
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-3 control-label">Direcci&oacute;n</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="direccion" readonly="readonly" value="'<?php echo $row_r['Direccion']; ?>'">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Tipo Solicitud</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="tp_s" readonly="readonly"value="'<?php echo $row_r['Tipo_Serv']; ?>'">
            </div>
        </div>       
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Fecha Emision</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="emis" readonly="readonly" value="'<?php echo $row_r['Fecha']; ?>'">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Observaciones</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="obser" value="'<?php echo $row_r['Obser']; ?>'"readonly="readonly" >
            </div>
        </div>

                    <button type="button" class="btn btn-danger" onclick ="db_solicitantes_guardar()">Guardar</button>
            <button type="button" class="btn btn-primary">Restablecer</button>
        </form>  
        
    </center>

</html>
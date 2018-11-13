<?php 
require("conexion.php");
$ejec_ser=$_POST['numero'];
//$querys="SELECT cedula, Nombre, Direccion, Tipo_Serv, Fecha, Observ FROM servicios 
//WHERE Numero=$ejec_ser";  
$querys = "SELECT ss.cedula as cedula, sp.Nombre as Nombre, sp.Direccion as Direccion, ss.Tipo_Serv as Tipo_Serv, ss.Fecha as Fecha, ss.Observ as Observ
        FROM servicios ss
        INNER JOIN solicitantes sp ON sp.CI = ss.cedula
        WHERE ss.Numero =$ejec_ser";
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
        
        <div class="form-group">
            <div class='input-group date'>
                <label class="col-sm-3 control-label">Fecha Ejecucion</label>
                <input type='text' class="form-control" id = 'fecha_ejecucion'/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Supervisor</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="supervisor" placeholder="Nombre de la Persona Supervisora">
            </div>
        </div>
                    <button type="button" class="btn btn-danger" onclick ="db_ejecutarServicio('<?php echo $_POST['numero']; ?>')">Guardar</button>
            <button type="button" class="btn btn-primary">Restablecer</button>
            <hr>
            <div class ="row clearfix" id ="subcontenido"></div>
        <form class ="form-horizontal" name="nuevo_usuario" method="POST" action="">
		
        <div class="form-group">
            <label class="col-sm-3 control-label">Solicitud</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sol"  readonly="readonly" value="<?php echo $ejec_ser; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Cedula</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ci" readonly="readonly" value="<?php echo $row_r['cedula']; ?>">
            </div>
        </div>                
        <div class="form-group">
            <label class="col-sm-3 control-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nombre" readonly="readonly"value="<?php echo $row_r['Nombre']; ?>">
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-3 control-label">Direcci&oacute;n</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="direccion" readonly="readonly" value="<?php echo $row_r['Direccion']; ?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Tipo Solicitud</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="tp_s" readonly="readonly"value="<?php echo $row_r['Tipo_Serv']; ?>">
            </div>
        </div>       
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Fecha Emision</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="emis" readonly="readonly" value="<?php echo $row_r['Fecha']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Observaciones</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="obser" value="<?php echo $row_r['Observ']; ?>"readonly="readonly" >
            </div>
        </div>
        
        </form>  
        
    </center>
<script type="text/javascript">
            $(function () {
                $('#fecha_ejecucion').datepicker();
            });
</script>
</html>
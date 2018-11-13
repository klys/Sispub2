<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$querys="SELECT Nombre, CI FROM solicitantes";	
	// Ejecutamos la Consuta
	$resultados=$mysqli->query($querys);

 ?>

<!--form class ="form-horizontal">
col-md-10
   
  <div class="form-group"-->
<center><form class ="form-group form-inline">

            <a href="#modal1"><h3>Busque la Solicitud de Servicio a Ejecutar</h3> 
            <!--label class="control-label"><input class="form-control" readonly="readonly" id = "nombre-servicio" type="text" placeholder="Utlice el Buscador" onPaste="return false;"></label-->
            <h1><span class ="glyphicon glyphicon-search"></span></h1></a> 
      
        <!--div class="col-md-10">
            <a href="#modal1"><h1><span class ="glyphicon glyphicon-search"></span></h1></a>
        </div-->
</form>
<div class='col-md-6' id ='datos-servicio'></div>
</center>
<!--/div>
</form-->

<!-- modal de contenido -->
<div id ="modal1" class ="modalmask">
        <div class ="modalbox resize ">
            <a href ="#close" title="Cerrar" class = "close"><span class = "glyphicon glyphicon-remove"></span></a>
            <div id ="modal-contenido">
                <?php require('buscarSolicitudservicio_formulario_top.php'); ?>
            </div>
        </div>
    </div>
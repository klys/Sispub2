<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$querys="SELECT Nombre, CI FROM solicitantes";	
	// Ejecutamos la Consuta
	$resultados=$mysqli->query($querys);

 ?>

<form class ="form-inline">

            <label class="control-label">C.I. / RIF</label> 
            <input type ="text" id = 'ci-rif' style="color:rgb(0,0,0)" onkeypress ='return false' onPaste = 'return false;' placeholder="Use el buscador -->"> 
            <label class="control-label">Solicitante</label>
            <input type ="text" id = 'solicitante' style="color:rgb(0,0,0)" onkeypress='return false' onPaste = 'return false;' placeholder="Use el buscador -->">
        
            <a href="#modal1"><span class ="glyphicon glyphicon-search"></span></a>
</form>        
<div class ='col-md-8'>
    <div class ="row clearfix" id = "tabla-solicitudes-anteriores">
       
    </div>
    <div class ="row clearfix" id = "nueva-solicitud">
       
    </div>
</div>



<!-- modal de contenido -->
<div id ="modal1" class ="modalmask">
        <div class ="modalbox resize ">
            <a href ="#close" title="Cerrar" class = "close"><span class = "glyphicon glyphicon-remove"></span></a>
            <div id ="modal-contenido">
                <?php require('buscarPersona_formulario_top.php'); ?>
            </div>
        </div>
    </div>

    
  
  
  

 
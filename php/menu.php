<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/menu_estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/datosparroquia.css" />
        <link rel='stylesheet' type='text/css' href='../css/bootstrap-datetimepicker.min.css'/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/efecto.js"></script>
        <script type ="text/javascript" src="../js/menu_ajax.js"></script>
        <script type ="text/javascript" src="../js/db_funciones.js"></script>
        <script type ="text/javascript" src ="../js/solicitud_functions.js"></script>
        <script type ="text/javascript" src="../js/validacion.js"></script>
        <script type ='text/javascript' src='../js/bootstrap-datetimepicker.min.js'></script>
        <script src="../js/jquery-ui.js"></script>
        <!-- Bootstrap calls -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
        

        <script type="text/javascript" src="../js/fecha.js"></script>
<style type="text/css">
body
{
    background: #000; 
}
 </style>
</head>

<body>
<?php

					$fecha = "<script type='text/javascript'>fecha();</script>";
					$hora = "<script type='text/javascript'>inicio();</script>";
			?>
		<!-- <h1><center>Servicios</center></h1> -->
    <div class="container" style="color:white; font-family: inherit Arial;">
    <div class="row clearfix">
        <!-- Logos -->
        <div class="row clearfix">
		<div class="col-md-8 column" style = "background:#000 url(../img/logo-principal.png) no-repeat center top; padding-top: 130px">
                    <!-- logo principal -->
		</div>
		<div class="col-md-2 column" style = "background:#000 url(../img/logo-mini-alcaldia-blanco-efecto.png) no-repeat center top; padding-top: 120px">
                     <!-- logo alcaldia -->
		</div>
		<div class="col-md-2 column"style = "background:#000 url(../img/logo-mini-unefa.png) no-repeat center top; padding-top: 120px">
                    <!-- logo unefa -->
		</div>
	</div>
        <!-- Top status bar-->
        <div class="row clearfix">
            <div class="col-md-6 column" style="text-align:center;">
                <label>Usuario: </label>USER_CONNECT
		</div>
		<div class="col-md-2 column" style="text-align:center;" id="hora-cont">
                    <label>Hora: </label><?php echo $hora;?>
		</div>
		<div class="col-md-4 column" style="text-align:center;"id="fecha-cont" >
                    <label>Fecha: </label><?php echo $fecha;?>
		</div>
	</div>
        <div class ="row clearfix">
            <div class="col-md-16- column" style="text-align:center;" id = "mensaje-sistema">
                ...
            </div>
        </div>
        <!-- Menu y contenido-->
        <div class="col-md-4 column">
            <ol id="Servicios">

                            <li class="Menu"><div class="list_m">Archivos</div>
                                            <ul>

                                                            <li><a href="javascript:menu_parroquias()">Parroquias</a></li>
                                                            <li><a href="javascript:menu_solicitudes()">Tipo de Solicitud</a></li>
                                                            <!--li><a href="javascript:menu_subsolicitudes()"> * Sub-Solicitud</a></li-->
                                                            <li><a href="javascript:menu_beneficiarios()">Beneficiarios</a></li>
                                                            <li><a href="javascript:menu_tipoBeneficiario()">Tipos de Beneficiarios</a></li>
                                            </ul>	
                            </li>
            				<li class="Menu"><div class="list_m">Procesos</div>
                                            <ul>

                                                            <li><a href="javascript:menu_solicitudServicio()">Solicitud de Servicio</a></li>
                                                            <li><a href="javascript:menu_ejecutarServicio()">Ejecutar Servicio</a></li>

                                            </ul>	
                            </li>
                            <li class="Menu"><div class="list_m">Impresiones</div>
                                            <ul>
                                                            <li><a href = 'javascript:menu_reporte_solicitudes()'>Reporte de Solicitud</a></li>
                                                            <li><a href="javascript:menu_reporte_personas()">Reporte de Entes</a></li>
                                                            <li><a href = 'javascript:menu_registro()'>Registro</a></li>
                                            </ul>	
                            </li>
            </ol>
        </div>
        <div class="col-md-8 column" id = "contenido" >
            Use el menu de la izquierda para realizar una accion.
        </div>
                </div>
        </div>                    

    
</body>
</html>

<?php  ?>
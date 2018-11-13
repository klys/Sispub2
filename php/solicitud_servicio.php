<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$querys="SELECT Nombre, CI FROM solicitantes";	
	// Ejecutamos la Consuta
	$resultados=$mysqli->query($querys);

 ?>
<html>
<head>
	<title>Solicitud de Servicios</title>
	<link rel="stylesheet" type="text/css" href="../css/menu_estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/datosparroquia.css" />
</head>
<body>

<center><h1>Solicitudes de Servicios</h1></center>
<center><form method="POST" action="">
	<table> 
		<tr> 
				<td> CI / RIF </td>
				<td> 
						<input type="name" name="usuario"/>
						<a href="#modal1">Buscar</a>	
						<a href="#modal2">Nvo.</a>	
						<td > Solicitud:  
						<label> Numero Aleatorio</label>
						</td>
				</td>

			</tr>
			<tr> 
				<td> Solicitantes </td>
				<td> 
						<input type="name" name="Nombre"/>
						
				</td>
				<td> Tipo de Beneficiario 
						<input type="name" name="Nombre"/>
				</td>
			</tr>
			
	</table>

</form>
</center>

<center><h1>Solicitudes Posteriores</h1></center>
<center><div><table border=1 width="80%" >
			<thead>
				<tr>
					<td><b>N*</b></td>
					<td><b>Solicitud</b></td>
					<td><b>Fecha</b></td>
					<td><b>CI / RIF</b></td>
					<td><b>Nombre</b></td>
					<td><b>Tipo de Solicitud</b></td>
					<td><b>S.S</b></td>
				</tr>
				<tbody>
					
				</tbody>	
			</thead>	
		</table></div></center>
		<center><div><table > 
		<tr> 
				<td width="80%" > Tipo de Solicitud </td>
				<td > Nuevas Solicitudes </td>
		</tr>

<tr> 
			<td>
			<select	 name= "solicitud">
			<option> solicitud1 </option>
			<option> solicitud2 </option>
			<option> solicitud3 </option>
			</td>
		</tr>

		<tr> 
			<td>
	
			</td>
		</tr>
		<tr> 
				<td> Sub-Solicitud </td>
					
		</tr>
		<tr> 
			<td>
			<select	 name= "subsolicitud">
			<option> subsolicitud1 </option>
			<option> subsolicitud2 </option>
			<option> subsolicitud3 </option>
			</td>
		</tr>
		<tr> 
			<td> 
				<input type= "submit" name="submit" value="Procesar"/> 	 
						
			</td>

		</tr>

		<tr> 
				<td> Observaciones y Sugerencias </td>
					
		</tr>
		
		<tr>
			<td> 
			
			<input type="name" name="Nombre"/>
						
			</td>
		</tr>

		<tr> 
			<td> 
				<input type= "submit" name="submit" value="Guardar"/> 
				<input type= "submit" name="submit" value="Salir"/>	 
						
			</td>

		</tr>

	</table></div></center>
<?php  
if (isset($_POST['submit'])) {
require("param.php");
}
?>
<div id="modal1" class="modalmask">
		<div class="modalbox rotate" >
				<a href="#close" title="cerrar" class="close">X</a>
				<h1> Lista de Solicitantes</h1>
<center><table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>CI</b></td>
				</tr>
				<tbody>
					<?php while ($rows=$resultados->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					<tr> 
						<td> <?php echo $rows['Nombre']; ?></td>
						<td> <?php echo $rows['CI']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</thead>	
		</table></center>
		</div>
</body>
</html>

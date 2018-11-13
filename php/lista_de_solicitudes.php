<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$solicitudes="SELECT Nombre, Codigo FROM solicitud";	
	// Ejecutamos la Consuta
	$result=$mysqli->query($solicitudes);

 ?>
<html>
<head>
	<title>Lista_Solicitudes</title>
</head>
	<body>
		<center><h5>Centro de Busquedas</h5></center>
		
		<p></p>
		<center><table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>Codigo</b></td>
				</tr>
				<tbody>
					<?php while ($row_sol=$result->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					
					<tr> 
						<td> <?php echo $row_sol['Nombre']; ?></td>
						<td> <?php echo $row_sol['Codigo']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</thead>	
		</table></center>
		<a href="cerrar.php">Salir</a>
	</body>
</html>
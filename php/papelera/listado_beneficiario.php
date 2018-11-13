<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$beneficiario="SELECT Codigo, Nombre FROM tdp";	
	// Ejecutamos la Consuta
	$resul=$mysqli->query($beneficiario);

 ?>
<html>
<head>
	<title>Lista_Beneficiarios</title>
</head>
	<body>
		<center><h5>Centro de Busquedas</h5></center>
		
		<p></p>
		<center><table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Codigo</b></td>
					<td><b>Nombre</b></td>
				</tr>
				<tbody>
					<?php while ($row_ben=$resul->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					
					<tr> 
						<td> <?php echo $row_ben['Codigo']; ?></td>
						<td> <?php echo $row_ben['Nombre']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</thead>	
		</table></center>
		<a href="cerrar.php">Salir</a>
	</body>
</html>
<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$servicio="SELECT Tipo_Serv,Numero,Nombre FROM servicios";	
	// Ejecutamos la Consuta
	$resul_serv=$mysqli->query($servicio);

 ?>
<html>
<head>
	<title>Lista_Servicio</title>
</head>
	<body>
		<center><h5>Centro de Busquedas</h5></center>
		
		<p></p>
		<center><table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Tipo de Servicio</b></td>
					<td><b>Servicio</b></td>
					<td><b>Nombre</b></td>
				</tr>
				<tbody>
					<?php while ($row_ser=$resul_serv->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					
					<tr> 
						<td> <?php echo $row_ser['Tipo_Serv']; ?></td>
						<td> <?php echo $row_ser['Numero']; ?></td>
						<td> <?php echo $row_ser['Nombre']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</thead>	
		</table></center>
		<a href="cerrar.php">Salir</a>
	</body>
</html>
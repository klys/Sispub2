<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$querys="SELECT ss.CI as ci, ss.Nombre as nm, ss.Parroquia as pq, ss.Sector as sc, ss.Direccion as dc, ss.Telefonos as tlf, t.nombre as tn FROM solicitantes ss"
                . " INNER JOIN tdp t ON ss.Tipop = t.tdp_id";	
	// Ejecutamos la Consuta
	$resultados=$mysqli->query($querys);

 ?>
<html>
<head>
	<title>Lista_Solicitantes</title>
</head>
	<body>
		<center><h3 style='color:#5bc0de'>Listado de Beneficiarios</h3></center>
		
		<p></p>
		<center><table border=1 width="80%" class="table table-bordered">
			<thead>
				<tr>
					<td style="color:rgb(250,0,0); text-align: center"><b>Nombre</b></td>
					<td style="color:rgb(250,0,0); text-align: center"><b>Cedula</b></td>
                                        <td style="color:rgb(250,0,0); text-align: center"><b>Parroquia</b></td>
                                        <td style="color:rgb(250,0,0); text-align: center"><b>Sector</b></td>
                                        <td style="color:rgb(250,0,0); text-align: center"><b>Direccion</b></td>
                                        <td style="color:rgb(250,0,0); text-align: center"><b>Telefono</b></td>
                                        <td style="color:rgb(250,0,0); text-align: center"><b>Tipo</b></td>
				</tr>
				<tbody>
					<?php while ($row=$resultados->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					<tr> 
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['nm']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['ci']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['pq']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['sc']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['dc']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['tlf']; ?></td>
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['tn']; ?></td>
                                                <td width="10%" style="text-align: center"> <?php echo "<button class 'btn btn-danger' id='{$row['ci']}' onclick = 'db_solicitantes_borrar(this.id)'><span class = 'glyphicon glyphicon-remove'></span></button>"; ?> </td>
					</tr>
					<?php } ?>
                                
				</tbody>	
			</thead>	
                        
		</table></center>
	</body>
</html>
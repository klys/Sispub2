<?php 
//Instanciamos la clase de Conexion a DB
	require('conexion.php');
	// Hacemos la Consulta a la BD.
	$query="SELECT tdp_id, nombre FROM tdp";	
	// Ejecutamos la Consuta
	$resultado=$mysqli->query($query);

 ?>
<html>
<head>
	<title>Beneficiarios</title>
</head>
	<body>
        <center><h3 style="color: #5bc0de">Beneficiarios</h3></center>
        <p></p>
		<center><form class ="form-group form-inline">
                        <label class = "form-control">Nombre Beneficiario</label>
                        <input class="form-control" id = "nombre-tdp" type="text" placeholder="Nombre del Beneficiario" maxlength="30" size="30" onPaste="return false;">
                        <button type="button" onclick ="db_tdp_guardar()" class="form-control">Guardar</button>
                    </form>
                </center>
		 <hr> 
                <center><table border=1 width="80%" class="table table-bordered">
			<thead>
				<tr>
					<td style="color:rgb(250,0,0); text-align: center"><b>Codigo</b></td>
					<td style="color:rgb(250,0,0); text-align: center"><b>Nombre</b></td>
				</tr>
				<tbody>
					<?php while ($row=$resultado->fetch_assoc()){ ?>
						 <!-- Imprimimos todos los valores de la Base de Datos -->
					<tr> 
                                            <td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['tdp_id']; ?></td>
						<td style="color:rgb(250,250,250); text-align: center"> <?php echo $row['nombre']; ?></td>
                                                <td width="10%" style="text-align: center"> <?php echo "<button class 'btn btn-danger' id='{$row['tdp_id']}' onclick = 'db_tdp_borrar(this.id)'><span class = 'glyphicon glyphicon-remove'></span></button>"; ?> </td>
					</tr>
					<?php } ?>
                                
				</tbody>	
			</thead>	
                        
		</table></center>
                   
                    
		
	</body>
</html>
<?php 

 ?>
 <html>
<head>
	<title>Ejecutar Servicio</title>
	<link rel="stylesheet" type="text/css" href="../css/menu_estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/datosparroquia.css" />

</head>
<body>

	<center><form name="ejec_serv" method="POST" action="">
		<table width="35%">
			

			<tr> 
				<td> SOLICITUD </td>

				<td> 
						<input type="text" name="solicitud" />
						
				</td>
				<td> 
						
						<a href="#sol">...</a>
			</tr>
				
			<td width="80%">CI-RIF</td>
			<td width="50%"> 
						<input width="80%" type="text" name="ci_rif" readonly="readonly"/>
						
				</td>
			
			<tr> 	

				<td> Nombre-Ente Solicitante </td>
				<td > 
						
						<input type="text" name="nombre" readonly="readonly"/>

				</td>
			</tr>

			<tr> 
				<td>Direcci&oacute;n </td> 
				<td> <input type="text" name="direccion" readonly="readonly"/></td> 		
			</tr>
			
			<tr> 
				<td width="50%">Parroquia</td> 
				<td>
					<!--<label> Numero Aleatorio</label>-->
					<input type="text" name="par" readonly="readonly"/>
					<!--<input type="text" name="par" disabled="disabled" />-->
			<!--<option> Parroquia Urbana Punta Card&oacute;n </option>-->
				</td> 
			</tr>
			<tr> 
				<td> Tipo Solicitud </td>
				<td colspan="2">
					
			<input type="text" name="tip_sol" readonly="readonly"/>

				</td>  
						
			</tr>

			<tr> 
				<td> Sub-solicitud</td>
				<td> 
						<input type="text" name="sub_sol" readonly="readonly"/>
					
				</td>
			</tr>

			<tr> 
				<td> Emision</td>
				<td> 
						<input type="text" name="emision" readonly="readonly"/>
					
				</td>
			</tr>
			<tr> 
				<td> Observaciones y Sugerencias</td>
				<td> 
						<input type="text" name="obs" readonly="readonly"/>
					
				</td>
			</tr>

			<tr> 
				
				<td> <br><br>

						
						<input type= "submit" name="grabar" value="Grabar"/>
						
				</td>
				<td> <br><br>

						
						<input type= "reset"  value="Cancelar"/>
						
				</td>

				<td> <br><br>

						
						<input type= "submit" name="anular" value="Cancelar"/>
						
				</td>
			</tr>

		</table>

	</form></center>
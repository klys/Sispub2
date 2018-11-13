<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
	// Conectamos al Servidor: Parametros: (nombre Serv., Usaurio, Contrase., Base de D.)
	$mysqli=new mysqli("localhost", "root","","servicios publicos");
	#Verificamos si da error
	if (mysqli_connect_errno()) {
		# code...
		echo 'Conexion Fallida: ', mysqli_connect_error();
	}
	/*else{
		echo "Conexion Exitosa";
	}
	// exit();
	*/
	 ?>
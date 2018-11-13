<!-- Sispub Vr. 1.0 // -->
<!--  PHP vr. 5.3 MySQL vr. 5.n.m-->
<!-- Realizado por: Osneris T, Estefany S. Ana M. -->
<?php 
// Evaluamos que ingrese datos correctos
$usuario= $_POST['login'];
$clave= $_POST['password'];
$reqlen= strlen($usuario) * strlen($clave);
if ($reqlen>0) {
#Requerimos archivos de conexion 
require('conexion.php');
// Hacemos la Consulta a la BD.
	$myuser="SELECT nombre_u FROM usuarios Where nombre_u='".htmlentities($_POST["login"])."'";	
	// Ejecutamos la Consuta
	$resul_u=$mysqli->query($myuser);
	// $user_ver=mysql_num_rows($myuser);
	$user_ver=mysqli_num_rows($resul_u);

	if($user_ver==1){

		$myclave="SELECT nombre_u, clave_u FROM usuarios Where nombre_u='".htmlentities($_POST["login"])."' and clave_u='".htmlentities($_POST["password"])."'";
		$resul_c=$mysqli->query($myclave);
		$clave_ver=mysqli_num_rows($resul_c);
		if ($clave_ver) {
			# code...si la contrasena es correcta
			session_start();
			// Guardamos variables de sesion para seguridad.php y log.
			$_SESSION["autentica"]="SIP";
			$_SESSION["usuario_actual"]=mysql_result($resul_c,0,0);
			header("Location: menu.php");
		}
		else{

			echo "<script>alert('La Clave es incorrecta'); 
			window.location.href=\"../1_index.php\"</script>";
		}
	}
	else{
		echo "<script>alert('El Usuario no Existe'); 
			window.location.href=\"../1_index.php\"</script>";
	}
}
else{
	echo "<script>alert('Debe llenar todos los campos'); 
	window.location.href=\"../1_index.php\"</script>";
}

 ?>
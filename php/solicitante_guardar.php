<?php 
require('conexion.php');

$ci_rif=$_POST["ci_rif"];
$solicitante=$_POST["solicitante"];
$sector=$_POST["sector"];
$direccion=$_POST["direccion"];
$parroquia=$_POST["parroquia"];
$telefono=$_POST["telefono"];
$tipo=$_POST["tipo"];

	$query_ins_sol="INSERT INTO solicitantes(CI,Nombre,Parroquia,Sector,Direccion,Telefonos,Tipop) VALUES ('$ci_rif','$solicitante','$parroquia','$sector','$direccion','$telefono','$tipo')";

	$resul_solict=$mysqli->query($query_ins_sol);

	if ($resul_solict>0) {
		# code...
		echo "usuario guardado";
	}
	else{
		echo "error al guardar usuario";
	}

 ?>
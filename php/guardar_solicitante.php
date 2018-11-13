<?php 
require('conexion.php');

$ci=$_POST["ci_rif"];
$soli=$_POST["solicitante"];
$sec=$_POST["sector"];
$dir=$_POST["Direccion"];
$par=$_POST["Parroquia"];
$cod=$_POST["codigo"];
$tel=$_POST["telefono"];
$tip=$_POST["tipo"];
//$tip_p=$_POST["tipo_p"];
$num_tel=$cod."-".$tel;
	$cons_cod_p="SELECT Codigo FROM parroquias WHERE Nombre='$par'";
	$res_con_cod=$mysqli->query($cons_cod_p);
	$row_con_p=$res_con_cod->fetch_assoc();
	$par_a_guardar=$row_con_p['Codigo'];
	//echo $par_a_guardar;
	$cons_tipo_p="SELECT Codigo FROM tdp WHERE Nombre='$tip'";
	$res_tipo_cod=$mysqli->query($cons_tipo_p);
	$row_con_t=$res_tipo_cod->fetch_assoc();
	$tip_a_guardar=$row_con_t['Codigo'];
	//echo $tip_a_guardar;
	$query_ins_sol="INSERT INTO solicitantes(CI,Nombre,Parroquia,Sector,Direccion,Telefonos,Tipop) VALUES ('$ci','$soli','$par_a_guardar','$sec','$dir','$num_tel','$tip_a_guardar')";

	$resul_solict=$mysqli->query($query_ins_sol);

	if ($resul_solict>0) {
		# code...
		echo "usuario guardado";
	}
	else{
		echo "error al guardar usuario";
	}

 ?>
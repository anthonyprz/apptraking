<?php
	session_start();
	require '../models/Conexion.php';
	$conexion = new Conexion();
	$conexion-> conexion();

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	
    $_SESSION["usuario"] = $usuario;
	$_SESSION["latitud"] = $_POST['latitud'];
	$_SESSION["longitud"] = $_POST['longitud'];




	$pass2 = mysql_query("SELECT pass FROM usuario WHERE usuario= '".$usuario."'");
	$row = mysql_fetch_array($pass2);
	
	if($pass == $row[0]){
		
		header('Location: ../models/Principal.php');
	}
	else {
		header('Location: ../index.php');
	}
?>
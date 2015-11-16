<?php
	session_start();
	include '../controllers/user.php';
	
	$Cusuario = new Usuario($usuario, $nombre,$pass,$pass2);
	
	InsertUsuario::crearUsuario($usuario, $nombre,$pass,$pass2);
	
	class InsertUsuario{
	   public function crearUsuario($usuario, $nombre,$pass,$pass2){
		   if($pass == $pass2){
				Usuario::insertusu($usuario, $nombre,$pass);
		   } else {
			   echo "las contresenyas no coinciden";
		   }
	   }
	}
?>
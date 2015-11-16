<?php 
session_start();
require '../models/Conexion.php';
$conexion = new Conexion();
$conexion-> conexion();

		class Usuario{
				
				public $usuario;
				public $nombre;
				public $pass;
				public $pass2;
			 
				function __construct($usuario, $nombre, $pass) {
						$this->usuario = $usuario;
						$this->nombre = $nombre;
						$this->pass = $pass;
				
						//return($id_usuario, $usuario, $nombre, $pass);
				}
			public function insertusu($usuario,$nombre,$pass){
			   
				mysql_query("INSERT INTO usuario (usuario, nombre, pass) VALUES('".$usuario."','".$nombre."','".$pass."')");
			}
			
			public function selectusu($usuario,$nombre, $pass){
			
	//		 $sql = mysql_query("SELECT * FROM usuario WHERE usuario= '".$usuario."' AND pass='".$pass."'");
	
		     $datos = "SELECT id_usuario FROM usuario WHERE usuario='".$usuario."'"; 
		     $sql= mysql_query($datos);
				
					while ($row = mysql_fetch_array($sql))  {
						$_SESSION['id_usuario'] = $row['id_usuario']; 
					 	$_SESSION['usuario'] = $row['usuario'];
					 	$_SESSION['passwd'] = $row['pass'];
					 	$_SESSION['nombre'] = $row['nombre'];
					};
			}
		}
	?>
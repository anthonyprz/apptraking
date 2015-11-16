<?php 
	include_once '../models/Conexion.php';
	$conexion = new Conexion();
	$conexion-> conexion();

	class Coordenadas{
		public $latitud;
		public $longitud;
		public $id_usuario;
			 
		function __construct($latitud, $longitud, $id_usuario) {
			$this->latitud = $latitud;
			$this->longitud = $longitud;
			$this->id_usuario = $id_usuario;
		}
		
		public function insertcoor($id_usuario,$longitud,$latitud){
			mysql_query("INSERT INTO coordenadas (id_usuario, latitud, longitud) VALUES('".$id_usuario."','".$latitud."','".$longitud."')");
		}
			
		public function selectcoor($id_usuario,$longitud,$latitud){
			session_start();
				
			$sql = mysql_query("SELECT * FROM coordenadas WHERE id_usuario='".$id_usuario."' ORDER BY id_coordenadas DESC  limit 3");
			//$row = mysql_fetch_array($sql);
				
			//$_SESSION['latitud2'] = $row[2]; 
    		//$_SESSION['longitud2'] = $row[3];
    		$i = 1;	
    		while ($row = mysql_fetch_array($sql)) {
				$i++;
                $_SESSION["latitud$i"] = $row[2]; 
                $_SESSION["longitud$i"] = $row[3]; 
            }
    	}
	}
?>
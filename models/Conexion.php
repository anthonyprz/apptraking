<?php
	class Conexion{
		public function conexion() {
			$conexion =mysql_connect("localhost","anthonyprz") or die ("Problemas al conectar el servidor");
			mysql_select_db("tracking", $conexion) or die ("error al tratar de conectar");
		}
	}
?>
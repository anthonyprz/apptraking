<?php
    session_start();
    
    include '../controllers/user.php';
    //require 'Conexion.php';
   
   // $conexion = new Conexion();
    //$conexion-> conexion();
    
    //variables post desde el index 
   // $nombre = $_POST['name'];
    
    //$pass2 = $_POST['pass2'];
    
    $Cusuario = new Usuario($usuario, $nombre,$pass,$pass2);
    
  InsertUsuario::crearUsuario($usuario, $nombre,$pass,$pass2);
    
    class InsertUsuario{

     
       public function crearUsuario($usuario, $nombre,$pass,$pass2){
           //echo $nombre;
           
           if($pass == $pass2){
                   Usuario::insertusu($usuario, $nombre,$pass);
           }
           else{
               echo "las contresenyas no coinciden";
           }
          
         
           
       }
       
       
    }
    
  


?>
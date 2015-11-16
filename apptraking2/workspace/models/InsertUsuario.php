<?php
    include '../controllers/user.php';
    //variables post desde el index 
    $nombre = $_POST['name'];
    $usuario = $_POST['user'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $Cusuario = new Usuario($usuario, $nombre,$pass,$pass2);
    
    InsertUsuario::crearUsuario($usuario, $nombre,$pass,$pass2);
    
    class InsertUsuario{
     
       public function crearUsuario($usuario, $nombre,$pass,$pass2){
           if($pass == $pass2){
                   Usuario::insertusu($usuario, $nombre,$pass);
           } else {
               echo "las contresenas no coinciden";
           }
       }
    }
    header('Location: ../index.php');
?>
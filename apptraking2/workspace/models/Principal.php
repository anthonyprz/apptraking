<?php 
session_start();
 include '../controllers/user.php';
 include '../controllers/coordenadas.php';
  
    //$usuario = $_POST['usuario'];
    	$usuario = $_SESSION['usuario'];
    	$usuario2 = $_POST['user'];
    	$pass = $_SESSION['passs'];
   // $pass = $_POST['pass'];
   // $nombre = $_POST['name'];
  //  $latitud = $_POST['latitud'];
   // $longitud = $_POST['longitud'];
   	$latitud = 	$_SESSION["latitud"];
	   $longitud = $_SESSION["longitud"];
	  
   $susuario = new Usuario($usuario,$nombre,$pass);
    
   $coordenadas = new Coordenadas($latitud,$longitud,$id_usuario); 
 
    Principal::mostrarusuario($usuario,$nombre, $pass);
    $id_usuario = $_SESSION['id_usuario'];
    Principal::insertcoor($id_usuario,$longitud,$latitud);
   
    Principal::selectcoor($id_usuario,$longitud,$latitud);
   
    class Principal{
     public function mostrarusuario($usuario,$nombre, $pass){
       Usuario::selectusu($usuario,$nombre, $pass);  
     }
    
     public function insertcoor($id_usuario,$longitud,$latitud){
      Coordenadas::insertcoor($id_usuario,$longitud,$latitud);
     }
     public function selectcoor($id_usuario,$longitud,$latitud){
      Coordenadas::selectcoor($id_usuario,$longitud,$latitud);
     }
    }
    
   // header('Location: ../views/principal.php');
    
     $latitud_final = $_SESSION['latitud2'];
     $longitud_final = $_SESSION['longitud2'];
   
   $latitud_final2 = $_SESSION['latitud3'];
   $longitud_final2 = $_SESSION['longitud3'];
      
      $latitud_final3 = $_SESSION['latitud4'];
     $longitud_final3 = $_SESSION['longitud4'];
      
     echo " Usuario: $usuario2";
     echo "<form method='post' action='../controllers/login.php'>";
  	 	echo "<input type='text' name='latitud' placeholder='latitud' id='latp'>";
  	 	echo "<input type='text' name='longitud' placeholder='longitud' id='lonp'>";
  	 	echo "<input type='submit' value='Anadir marcador'>";
  	 	echo "</form>";
     
?>
<!DOCTYPE html>
<html>
 <head></<head>
 <body>

  <style type="text/css">
   html, body { height: 100%; margin: 0; padding: 0; }
   #map { height: 90%; 
          width: 90%;
          margin:auto;
   }
  </style>
  <div id='map'></div>

  <script type="text/javascript" >
    
   function position(){    
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
   }
   var latitud = parseFloat("<?php echo  $latitud_final; ?>");
   var longitud = parseFloat("<?php echo $longitud_final; ?>");
   
  var latitud2 = parseFloat("<?php echo  $latitud_final2; ?>");
  var longitud2 = parseFloat("<?php echo $longitud_final2; ?>");
   
  var latitud3 = parseFloat("<?php echo  $latitud_final3; ?>");
  var longitud3 = parseFloat("<?php echo $longitud_final3; ?>");
  
  document.getElementById("info").innerHTML = latitud + "  " + longitud;
 
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: latitud, lng: longitud},
    zoom: 17
  });
  var coords = {lat:latitud, lng: longitud};
 var coords2 = {lat:latitud2, lng: longitud2};
  var coords3 = {lat:latitud3, lng: longitud3};
  
  
   var marker = new google.maps.Marker({
    map: map,
    position: coords,
    title:"tercera posicion"
}); 
var marker2 = new google.maps.Marker({
    map: map,
    position: coords2,
    title:"segunda posicion"
}); 
var marker3 = new google.maps.Marker({
    map: map,
    position: coords3,
    title:"posicion actual"
}); 
 
 
  
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEBUrxHrq8he8DGw9KhSlZV5XYsY7EdoI&callback=initMap">
    </script>
 </body>
</html>
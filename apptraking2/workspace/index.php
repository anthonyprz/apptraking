<!DOCTYPE html>
<html>
    <head>
		<?php session_start(); ?>
        <meta charset="utf-8"/>
	    <title>Traking APP</title>
        <link rel="StyleSheet" href="css/estilo.css" type="text/css">
		<link rel="icon" type="image/png" href="imagenes/List2.png" />
	    <script src="lib/jquery-1.11.3.min.js"></script>
	    <script type="text/javascript"></script>
	    <style type="text/css">
            #map { height: 100%; }
    	</style>
    </head>
    <body>
        <div id="contenedor">
            <div id=logolek></div>
            <div id="loginf">
                <h1>Login</h1>
                <form method="post" action="controllers/login.php">
                    <p>
                        <input type="text" name="usuario" value="" placeholder="Usuario" class="nombre">
                        <br/>
                        <input type="password" name="pass" value="" placeholder="Password" class="contraseña">
                        <br/>
                        <input  hidden type="text"   name="latitud" id="latitud" placeholder="latitud"/>
                        <br/>
                        <input hidden type="text"  name="longitud" id="longitud" placeholder="longitud"/> 
                        <div ="loginb">
                            <input class="btn" data-toggle="button" aria-pressed="false" autocomplete="off" type="submit" name="login" value="Login" onclick="enviar_ubicacion()">
                        </div><!--loginb -->
                    </p>
                </form>
            </div><!--loginf --> 
        </div><!--contenedor -->
    
    <!--_______________registro______________ -->
    
        <div  id="contenedorr">
            <div id=logolek></div>
            <div id="registro">
                <h1>Sign Up</h1>
                <form method="post" action="models/InsertUsuario.php">
                    <input type="text"  placeholder="Nombre" name="name">
                    <br>
                    <input type="text"  placeholder="Usuario" name="user">
                    <br>
                    <input type="password"  placeholder="Contraseña" name="pass">
					<br>
                    <input type="password"  placeholder="repetir contraseña" name="pass2">
                    </br></br>
                    <div ="registrob">
                        <input class="btn" data-toggle="button" aria-pressed="false" autocomplete="off" type="submit" name="commit" value="Register">
                    </div><!--registrob -->
                </form>
            </div><!--registro --> 
        </div><!--contenedorr -->
    
        <!--enviar ubicacion al formulario -->
    
        <script type="text/javascript">
      
            if (typeof navigator.geolocation == 'object'){
                navigator.geolocation.getCurrentPosition(mostrar_ubicacion);
            }

            function mostrar_ubicacion(p){
                var latti = p.coords.latitude;
                var longgii = p.coords.longitude;
                document.getElementById("latitud").value = latti;
                document.getElementById("longitud").value = longgii;
            }
        </script>
    </body>
</html>
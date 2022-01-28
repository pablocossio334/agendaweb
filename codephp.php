<?php
// Dirección o IP del servidor MySQL
     include "personas.php";

      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="movedb";
 
      // Nombre de la tabla a trabajar
      $tabla = "agenda";

 
      function Conectarse()
      {
       
global $host,$puerto,$usuario,$contrasena,$baseDeDatos,$tabla;

     $mysqli = new mysqli($host, $usuario, $contrasena, $baseDeDatos);
     $mysqli->set_charset("utf8");
    
    

//
return $mysqli;
}

function busqueda_nombre ($nombre)
{    $conexion =Conectarse();


	$resultado=$conexion->query("Select * from agenda where NOMBRE like '".$nombre."%' or NOMBRE like '%".$nombre."' or NOMBRE like '%".$nombre."%' order by NOMBRE");
    
    $i=0;
    while ($array_registro = 
    	$resultado->fetch_assoc()) {

    $a[$i]=new Persona( $array_registro['NOMBRE'],$array_registro['TELEFONO']);
    $i=$i+1;
    }
    
   
mysqli_close($conexion);

return $a;

}



?>
      
      
     
     
 
    
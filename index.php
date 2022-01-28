<!doctype html>
 <html>
 
<head>
  

   <head>
      <meta charset="utf-8"/>
      <title>es una prueba</title>  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
body {
background-color: black;
}
</style>

      
   </head>
  
<body class="m-0 vh-100 row justify-content-center align-items-center">
  
  
   <div class="container">
    

      
      <div  class="row">
         
         <div style="background-color:yellow" class="col-2">
          <img src="img/telefono.gif"
         
     width="180"
     height="168">
         </div>
         
         <div style="background-color:yellow" class="col-10">
           <img src="img/telefonos.gif"

         
     width="680"
     height="168">
     by Pablo Cossio
         </div>
                
      </div>
       
       <div style="background-color:gray" class="col-auto  p-2 text-center" id="busqueda">
    <form>
  <hr>
  <div class="form-inline">
    
    <label for="exampleInputEmail1">BUSQUEDA...</label>
    <select class="form-control">
  <option>NOMBRE</option>
   <option>APELLIDO</option>
    <option>TELEFONO</option>
</select>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SORETE">
    <button type="submit" class="btn btn-primary">BUSCAR</button>

  </div>
 
  <hr>
</form>
         
 

        </div>


    

      
         <div style="background-color:white" class="row" id="tablilla">
         
<br><br><br>
       
            <div  class="col-12">
              
            <?php include "codephp.php";


if(!isset($variable) || variable == false )
echo "choripan";


  $variable= $_GET["variable"];

echo $variable;
$lista=busqueda_nombre($variable);

?>
<table class="default" border="1">

  <tr>
    <td></td>
    <td>NOMBRE
    </td>
    <td>TELEFONO</td>
    
    </tr>
<?php 
$i = 0;


for($i=0;$i<count($lista);$i++) {

  ?>
<tr>
    <td>

  <?php 
    echo $i;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */

?>
</td>
 <td>

  <?php 
    echo $lista[$i]->getNombre();
?>
</td>
<td>

  <?php 
    echo $lista[$i]->getTelefono();
?>
</td>
</tr>
<?php

}
?>
</table>

             
              
              </div>

         </div>  
         <div  class="row">
         
            <div style="background-color:#c96718" class="col-6">
             1
            </div>
            <div style="background-color:#35720d" class="col-6">
          2
            </div>
          
                   
          </div>    

   </div>





<body>
   
   </body>
  <script src="coso.js"></script>
  

 </html>
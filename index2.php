 <?php include "codephp.php";

$variable= $_GET["variable"];

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
chorizito
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

	

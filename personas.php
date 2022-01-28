<?php
class Persona
{
  private $Nombre;
  private $Telefono;
 
 
  public function __construct($nome,$tel)
  {
    $this->Nombre=$nome;
    $this->Telefono=$tel;
   
  }

public function SetPersona($name,$Telefono)
{

	$Persona->Nombre=$name;
	$Persona->Telefono=$Telefono;

}


  public function getNombre()
  {
    return $this->Nombre;
  }

  public function getTelefono()
  {
    return $this->Telefono;
  }

  
}
?>

?>


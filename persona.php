<?php
  class Persona {
    public $nombre;
	public $apellido;
	public function hablar(){
	echo "soy " . $this->nombre . " y estoy hablando";
	}
  }

$p = new Persona ();
$p->nombre = "Micaela";
$p->apellido = "Gomez";

$p1 = new Persona ();
$p1->nombre = "Juan";
$p1->apellido = "perez";

echo "hola ".$p->nombre	. "<br>";
echo "hola ".$p1->nombre . "<br>";

$p-> hablar();
echo "<br>";
$p1->hablar();


?>  
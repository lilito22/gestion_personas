<?php

require_once "../class/Persona.php";

$Persona1 = new Persona ();

$Persona1->nombre = "Julieth";
$Persona1->edad = 20;
$Persona1->correo = "leidylondono030@gmail.com";
$Persona1->apellido = "Londoño";

echo $Persona1->saludar();

$Persona2 = new Persona ();

$Persona2->nombre = "Elkin";
$Persona2->edad = 22;
$Persona2->correo = "elkinrivero22@gmail.com";
$Persona2->apellido = "Rivero";

echo $Persona2->saludar();

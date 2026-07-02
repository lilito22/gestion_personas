<?php

require_once "../class/Persona.php";

$persona1 = new Persona ("Julieth","20","leidylondono030@gmail.com","Londoño");
$persona2 = new Persona ("Elkin","21","elkinrivero22@gmail.com","Rivero");

echo $persona1->saludar();
echo $persona2->saludar();
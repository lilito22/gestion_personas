<?php

require_once "../class/Persona.php";
require_once "../class/Animal.php";

$persona1 = new Persona ("Julieth","20","leidylondono030@gmail.com","Londoño");
$persona2 = new Persona ("Elkin","21","elkinrivero22@gmail.com","Rivero");

echo $persona1->saludar();
echo $persona2->saludar();

$animal1 = new Animal ("Tom","5","American wirehair","blanco con negro grisaceo");
$animal2 = new Animal ("Manchas","3","Gato americano de pelo corto","blanco con pintas negras");

echo $animal1->Presentar_mascota();
echo $animal2->Presentar_mascota();
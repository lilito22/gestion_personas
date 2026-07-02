<?php
require_once "persona.php";

class Estudiante extends Persona
{
    public function saludar()
    {
        return "Hola, mi nombre es: ".$this->nombre ." ".$this->apellido . ", mi correo es: " .$this->correo. " y tengo " .$this->edad. " años". " y soy un estudiante". "<br>";;
    }
}
<?php

class Persona
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function Saludar() 
    {
        return "Hola, mi nombre es: ".$this->nombre ." ".$this->apellido . ", mi correo es: " .$this->correo. " y tengo " .$this->edad. " años". "<br><br>";
    }
}
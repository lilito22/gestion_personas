<?php

class Animal 
{
    public $nombreMascota;
    public $edadMascota;
    public $raza;
    public $color;


    public function __construct($nombreMascota,$edadMascota,$raza,$color)
    {
        $this->nombreMascota=$nombreMascota;
        $this->edadMascota=$edadMascota;
        $this->raza=$raza;
        $this->color=$color;
    }
    public function Presentar_mascota()
    {
        return "Hola, mi gato se llama: ".$this->nombreMascota.
        ", es de raza: ".$this->raza . 
        ", es de color: " .$this->color. 
        " y tiene " .$this->edadMascota. "  años de edad". "<br>";
    }
}
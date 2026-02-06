<?php

class Persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar()
    {
        return "Hola, soy $this->nombre y tengo $this->edad años.";
    }
}

$victor = new Persona("Victor", 30);
echo $victor->saludar();

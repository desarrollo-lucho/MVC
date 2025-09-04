<?php

//Programacion orienta a objetos (POO)
//Clases: Un molde para crear mas objetos del mismo tipo

class Carro{
    //Atributos o propiedades (Variables)
    public $color;
    public $marca;
    public $modelo;
    public $caballaje;
    public $velocidad;
    public $puestos;

    // Como puedo crear un costructor?
    public function ___construct($color,$marca,$modelo,$caballaje,$velocidad,$puestos)
{
    $this-> color = $color;
    $this-> marca = $marca;
    $this-> modelo = $modelo;
    $this-> caballaje = $caballaje;
    $this-> velocidad = $velocidad;
    $this-> puestos = $puestos; 
}
}






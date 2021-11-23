<?php

class Fraccion{
    private $numerador;
    private $denominador;

    public function __construct($numerador,$denominador){ // tiene doble barra-baja dado que es una palabra reservada
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    public function __toString(){ // tiene doble barra-baja dado que es una palabra reservada
        return $this->numerador . "/" . $this->denominador ;
    }







}

$fraccion = new Fraccion(2,3);

echo $fraccion->__toString();


?>
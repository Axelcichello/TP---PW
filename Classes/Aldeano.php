<?php

class Aldeano implements Recolector
{

    use PuedoRecolectar;

    private int $velocidadRecoleccion; //Cantidad de alimento que recoge por minuto

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }
}

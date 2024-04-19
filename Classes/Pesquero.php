<?php

class Pesquero implements Recolector
{
    use PuedoRecolectar;

    private  $velocidadRecoleccion;
    protected $bonus;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
        $this->bonus = null;    
    }
}
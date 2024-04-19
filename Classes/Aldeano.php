<?php

abstract class Aldeano implements Recolector
{
    use PuedoRecolectar;

    protected  $velocidadRecoleccion;
    protected  $bonus;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
        $this->bonus = null;
    }


}
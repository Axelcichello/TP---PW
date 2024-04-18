<?php

Class Pesquero implements Recolector{

    use PuedoRecolectar;

    private int $velocidadRecoleccion;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }

    
}
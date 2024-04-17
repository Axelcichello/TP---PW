<?php

Class Pesquero {

    private int $velocidadRecoleccion;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }

    public function recolectar(BancoDePesca $bancoDePesca) : void
    {
        echo "Recolecte todo el alimento en " . ceil($bancoDePesca->getAlimento()/$this->velocidadRecoleccion);
    }
}
<?php

Class Arbusto{

    private int $cantidadAlimento;

    public function __construct(){
        $this->cantidadAlimento = 125;
    }

    public function getAlimento() : int
    {
        return $this->cantidadAlimento;
    }
}
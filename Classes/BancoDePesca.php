<?php

class BancoDePesca
{

    private int $cantidadAlimento;

    public function __construct()
    {
        $this->cantidadAlimento = 225;
    }

    public function getAlimento(): int
    {
        return $this->cantidadAlimento;
    }
}

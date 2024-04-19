<?php

class BancoDePesca implements Recolectable
{
    use TengoComida;

    private int $cantidadAlimento;

    public function __construct()
    {
        $this->cantidadAlimento = 225;
    }


}
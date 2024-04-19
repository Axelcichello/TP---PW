<?php


class Arbusto implements Recolectable
{
    use TengoComida;

    private int $cantidadAlimento;

    public function __construct()
    {
        $this->cantidadAlimento = 125;
    }

}
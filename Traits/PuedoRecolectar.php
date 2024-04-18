<?php

trait PuedoRecolectar
{
    public function recolectar(Recolectable $rc): void
    {
        echo "Recolecte todo el alimento en " . ceil($rc->getAlimento()/$this->velocidadRecoleccion);
    }
}
<?php

trait PuedoRecolectar
{
    public function recolectar(Recolectable $reco)
    {
        
        $tiempo = ($this->getBonus() != null) ? ceil($reco->getAlimento()/($this->velocidadRecoleccion * $this->getBonus())) //Caso con bonus
        : ceil ($reco->getAlimento()/$this->velocidadRecoleccion); //Caso sin bonus

        echo "El tiempo de recoleccion fue de " . $tiempo;
        
        
    }

    public function getBonus()
    {
          return $this->bonus;
    }
}
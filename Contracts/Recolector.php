<?php

interface Recolector
{
    public function recolectar(Recolectable $reco);
    
    public function getBonus();
}
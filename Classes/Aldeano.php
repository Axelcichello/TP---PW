<?php 

    Class Aldeano {

        private int $velocidadRecoleccion; //Cantidad de alimento que recoge por minuto

        public function __construct(){
            $this->velocidadRecoleccion = 18;
        }

        public function recolectar(Arbusto $arbusto) : void
        {
            echo "Recolecte todo el alimento en " . ceil($arbusto->getAlimento()/$this->velocidadRecoleccion);
        }
    }
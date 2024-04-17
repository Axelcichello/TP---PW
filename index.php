<?php

require 'Classes/Aldeano.php';
require 'Classes/Arbusto.php';
require 'Classes/Pesquero.php';
require 'Classes/BancoDePesca.php';

$aldeano = new Aldeano;
$arbusto = new Arbusto;

$aldeano->recolectar($arbusto);
// Se debe ver el echo que devuelve el método recolectar

// echo "<br>";

// $pesquero = new Pesquero;
// $bancoDePesca = new BancoDePesca;

// $pesquero->recolectar($bancoDePesca);
// // // Se debe ver el echo que devuelve el método recolectar

// // // ------

// // $aldeanoChino = new AldeanoChino;
// // $aldeanoFranco = new AldeanoFranco;
// // $arbusto1 = new Arbusto;
// // $arbusto2 = new Arbusto;

// // $aldeanoChino->recolectar($arbusto1);
// // // Se debe ver el echo que devuelve el método recolectar sin bonus

// // $aldeanoFranco->recolectar($arbusto2);
// // // Se debe ver el echo que devuelve el método recolectar con el bonus del 25%

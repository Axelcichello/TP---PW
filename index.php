<?php
require 'contracts/Recolector.php';
require 'contracts/Recolectable.php';
require 'traits/PuedoRecolectar.php';
require 'traits/TengoComida.php';
require 'classes/Aldeano.php';
require 'classes/Arbusto.php';
require 'classes/Pesquero.php';
require 'classes/BancoDePesca.php';
require 'classes/AldeanoChino.php';
require 'classes/Aldeanofranco.php';




// $aldeanoMaya = new Aldeano();
// $arbusto1 = new Arbusto();
// $aldeanoMaya->recolectar($arbusto1);

echo "<br>";

echo "Pesquero: ";
$pesquero1 = new Pesquero();  
$bancoPesca1 = new BancoDePesca();
$pesquero1->recolectar($bancoPesca1);
echo "<br>";

$aldeanoChino = new AldeanoChino();
$aldeanoFranco = new AldeanoFranco();
$arbusto1 = new Arbusto();
$arbusto2 = new Arbusto();

echo "Aldeano Chino: ";
$aldeanoChino->recolectar($arbusto1);
echo "<br>";

echo "Aldeano Franco: ";
$aldeanoFranco->recolectar($arbusto2);



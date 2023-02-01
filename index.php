<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Votre nom");
echo "nombre d'instances de la classe personnage : " . Personnage::getNumInstances() . "<br>";
// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");
echo "nombre de dragons : " . Dragon::nbDragon();
// Creation d'une instance de princesse
$princesse = new Princesse();

// Creation d'ne instance de sorcier
// FIXME --- commenter pour tester
//$sorcier = new Sorcier();






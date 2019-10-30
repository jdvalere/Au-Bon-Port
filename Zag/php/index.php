<?php

require 'personne.php';

$zag = new Personne();

$zag->setNom("Castelli");
$zag->setPrenom("Jéjé");

echo $zag;
var_dump($zag);
?>
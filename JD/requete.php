<?php
// Connexion à la BDD 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=expernet','root','');


$requete1 = "SELECT id, allergenes, typeRepas, prix, taxe, temps FROM plat";


$res2= $bdd->query($requete1);

?>
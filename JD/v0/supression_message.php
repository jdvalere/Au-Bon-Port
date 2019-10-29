<?php 
include 'Au-Bon-Port/requete.php';

// Connexion à la BDD + suppression des données du message choisi 
if(isset($_POST['suppr'])) {
	$reponse=$bdd->query("DELETE FROM `plat` WHERE `id`.`id` = '".$_POST['suppr']."'");
	header('Location: ..Au-Bon-Port//accuseReception.php');
}
<?php

if (isset($_POST['Valider'])){
	
 //prend les valeurs provenant de index.php (login)
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 //va se connecter au serveur et selectionner la Base de donn�es
$bdd = new PDO('mysql:host=127.0.0.1;dbname=expernet','root','');

$requete="SELECT * FROM `users`";
$compteur=0;
foreach($bdd->query($requete) as $row){
	if($username==$row['username'] and $password==$row['password']){
		header('Location: ../accueil.php');
		$compteur++;
	}
}
	
	if($compteur==0) {
		header('Location: ../login.php');
	}

 //Question pour la base de donn�es pour utilisateur
  /*$result = mysql_query("select * from users where username = '$username' and password = '$password' ")
 or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
 if ($row['username'] == $username && $row['password'] == $password) {
 	echo "Authentification r�ussi avec succ�s !!! Bonjour".$row['username'];
 } else {
 	echo "Authentification �chou�... :( ";
 }*/
}
 ?> 
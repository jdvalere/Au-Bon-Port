<?php
 try{
  $db = new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
   }
   catch(Exception $e)
   {
   die('Erreur : '.$e->getMessage());
   }
 //ce code permet de vérifier si le compte a bien été valider
// Récupération des variables necessaires à la vérification du champ 'actif' de la BDD
$pass = $_POST['passw'];
 
// Récupération de la valeur du champ actif pour le login $login
$req = $db->prepare("SELECT passw FROM account WHERE login like :passw ");
if($req->execute(array(':passw' => $passw))  && $row = $req->fetch())
  {
   	$actif = $row['actif']; // $actif contiendra alors 0 ou 1
  }
 
 
// Il ne nous reste plus qu'à tester la valeur du champ 'actif' pour
// autoriser ou non le membre à se connecter
 
if($actif == '1') // Si $actif est égal à 1, on autorise la connexion
  {
   //...
   // On autorise la connexion...
   //...
  }
else // Sinon la connexion est refusé...
  {
   //...
   // On refuse la connexion et/ou on previent que ce compte n'est pas activé
   //...
  }
 
 
//...	
// Fermeture de la connexion	
//...
// Votre code
//...
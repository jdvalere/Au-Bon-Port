<?php
try{
  $db = new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
   }
   catch(Exception $e)
   {
   die('Erreur : '.$e->getMessage());
   }
$passw = $_GET['log'];
$cle = $_GET['cle'];
 
// Récupération de la clé correspondant au $mail dans la base de données
$req = $db->prepare("SELECT cle,actif FROM account WHERE passw like :passw ");
if($req->execute(array(':passw' => $passw)))
  {
    
    $row = $req->fetch();
    $clebdd = $row['cle'];	// Récupération de la clé
    $actif = $row['actif']; // $actif contiendra alors 0 si pas actif ou 1 si actif 
  echo $cle . " " . $clebdd;
 

// On teste la valeur de la variable $actif récupéré dans la BDD
if($actif == '1') // Si le compte est déjà actif on prévient
  {
     echo "Votre compte est déjà actif !";
  }
else // Si ce n'est pas le cas on passe aux comparaisons
  {
     if($cle == $clebdd) // On compare nos deux clés	
       {
          // Si elles correspondent on active le compte !	
          
 
          // La requête qui va passer notre champ actif de 0 à 1
          $req = $db->prepare("UPDATE account SET actif = 1 WHERE passw like :passw ");
          $req->bindParam(':passw', $passw);
          $req->execute();
          echo "Votre compte a bien été activé !";
       }
     else // Si les deux clés sont différentes on provoque une erreur...
       {
          echo "Erreur ! Votre compte ne peut être activé...";
       }
  }
}
else{
echo "utilisateur non trouvé";


}
 
?>
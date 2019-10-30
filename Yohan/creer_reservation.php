<html><body>
   
   <p>  test </p>
   <p> Autre Réservation <a href="Reservation.php"> Cliquez ici </a>
<?php
try
{
   $db= new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
}
catch(Exception $e)
{
    die ('Erreur : '.$e->getMessage());
}


var_dump($_POST);
require 'Reservation.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$numtel= $_POST["numtel"];
$typeService= $_POST["typeService"];
$numtable= $_POST["numtable"];
$date= $_POST["date"];
$heure= $_POST["heure"];
$nbrCouverts= $_POST["nbrCouverts"];



$req =$db->prepare('INSERT INTO reservation (nom,prenom,numtel,numtable,nbrCouverts,date,heure,typeService) VALUES(:nom,:prenom,:numtel,:numtable,:nbrCouverts,:date,:heure,:typeService)');
$req->execute(array(
'nom' => $nom,
'prenom'=> $prenom,
'numtel'=> $numtel,
'numtable' => $numtable,
'nbrCouverts'=> $nbrCouverts,
'date'=> $date,
'heure'=> $heure,
'typeService'=> $typeService

));
   echo 'Votre réservation a bien été prise';
?>
<p> test <a href="Reservation.php">cliquer ici </a>.</p>
</body>
</html>
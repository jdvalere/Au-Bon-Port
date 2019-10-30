<html>
<body>
<?php
header('Content-type: text/html; charset=UTF-8');
try
{
   $db = new PDO("mysql:host=127.0.0.1;dbname=expernet","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND =>" SET NAMES utf8",PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"));
}
catch(Exception $e)
{
    die ('Erreur : '.$e->getMessage());
}

var_dump($_POST);
require 'Plat.php';

$nom = $_POST["nom"];
$prix = $_POST["prix"];
$typePlat= $_POST["typePlat"];
$ingredients= $_POST["ingredients"];
$recette= $_POST["recette"];
$fournisseur= $_POST["fournisseur"];
$allergenes="";

if (isset($_POST["Aucun"])){
    $Aucun=$_POST["Aucun"];
    $allergenes.=$Aucun.";";
            } 

if (isset($_POST["Cereales"])){
    $Cereales=$_POST["Cereales"];
    $allergenes.=$Cereales.";";
}
if (isset($_POST["Crustaces"])){
$Crustaces=$_POST["Crustaces"];
$allergenes.=$Crustaces.";";
}

if (isset($_POST["FruitsACoques"])){
    $FruitsACoques=$_POST["FruitsACoques"];
    $allergenes.=$FruitsACoques.";";
}

if (isset($_POST["Celeri"])){
     $Celeri=$_POST["Celeri"];
     $allergenes.=$Celeri.";";
    }

if (isset($_POST["Oeufs"])){
    $Oeufs=$_POST["Oeufs"];
    $allergenes.=$Oeufs.";";
        }

if (isset($_POST["Moutarde"])){
        $Moutarde=$_POST["Moutarde"];
        $allergenes.=$Moutarde.";";
        }
if (isset($_POST["Poissons"])){
     $Poissons=$_POST["Poissons"];
     $allergenes.=$Poissons.";";
            }
 if (isset($_POST["Soja"])){
    $Soja=$_POST["Soja"];
    $allergenes.=$Soja.";";
    }
if (isset($_POST["Grainesdesesame"])){
    $Grainesdesesame=$_POST["Grainesdesesame"];
    $allergenes.=$Grainesdesesame.";";
        }
if (isset($_POST["Lupin"])){
    $Lupin=$_POST["Lupin"];
    $allergenes.=$Lupin.";";
        } 
if (isset($_POST["Arachides"])){
    $Arachides=$_POST["Arachides"];
    $allergenes.=$Arachides.";";
        } 
if (isset($_POST["Mollusques"])){
    $Mollusques=$_POST["Mollusques"];
    $allergenes.=$Mollusques.";";
            } 
   
$req =$db->prepare('INSERT INTO plat(nom,prix,typePlat,allergenes,ingredients,recette,fournisseur) VALUES(:nom,:prix,:typePlat,:allergenes,:ingredients,:recette,:fournisseur)');
$req->execute(array(
'nom' => $nom,
'prix'=> $prix,
'typePlat'=> $typePlat,
'allergenes' => $allergenes,
'ingredients'=> $ingredients,
'recette'=> $recette,
'fournisseur'=> $fournisseur

));
   echo 'Votre repas a bien été ajouté à la base';
?>
</body>
</html>
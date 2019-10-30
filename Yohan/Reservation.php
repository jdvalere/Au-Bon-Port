<?php
try{
    $bdd= mysqli_connect('localhost','root','','expernet');
}
catch(Exception $e)
{
    die ('Erreur : '.$e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">        
function genre('type_reservation,type_evenement'){
var type_reservation= document.getElementById(type_reservation);
var type_evenement= document.getElementById(type_evenement);
type_reservation.innerHTML = "";
if (type_reservation.value == "Evenementiel") {
    var optionArray = ["|","mariage | Mariage","anniversaire | Anniversaire","religieux | Religieux",]
}
for (var option in  optionArray){
    var pair = optionArray[option].split(" | ");
    var newOption = document.createElement ("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair [1];
    type_evenement.options.add(newOption);
}
}
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>Réservation</title>
        <link rel="stylesheet" href="css/loginfromX.css">
        <title>Au Bon Port</title>
    
        <link href="css/landing-page.css" rel="stylesheet">
    </head>
    
    <body>
            <body background="img/background.jpg"> 
      <meta name="viewport" content="width=device-width"/>
        <!-- Partie de la Navigation -->
        
        <!-- Bandeau d'en t�te -->
        <a name="about"></a>
        <div class="intro-header"> 
            <div class="container"> 
                    <div class="col-lg-12">
                        <div style="position: left";class="intro-message">
                            <h1>Au Bon Port</h1>
                            <hr class="intro-divider">
                            <ul class="list-inline intro-social-buttons">
                            </ul>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de l'en-t�te -->
    
        <!-- Page -->
         
        <center>
        <html lang="fr" dir="ltr">
    
        
            <form class="box" action='creer_reservation.php' method="post"><!--post-->
                <!--<script src="js/champs.js"></script>-->
                <!-- <form action="" method="get" onsbmit="return controleChamps(this)">  -->
                <!--champsjs:
               function controlleChamps(){
                    return false;
                }     -->
            <h1>Coordonnées</h1>
            <input type="text"  name="nom" placeholder="Nom">
            <input type="text"  name="prenom" placeholder="Prénom">
            <input type="number"  name="numtel" placeholder="Numéro de téléphone">
            <center><h1>Réservation</h1></center>
            <input type="date" name="date" placeholder="Date">
            <input type="time"  name="heure" placeholder=""> 
            <input type="number" name="numtable" placeholder="Numéro de table"
            min="1" max="30">
            <input type="number"  name="nbrCouverts" placeholder="Nombre de Couverts"
            min="1" max="100">


            <span class="custom-dropdown custom-dropdown--white" id=type_reservation onchange="genre(this.id,'type_evenement','type_reservation')">
    <select class="custom-dropdown__select" >
        <option>Type de Réservation</option>
        <option>Sur Place</option>
        <option>A Emporter</option>
        <option>Livraison</option>
        <option>Evenementiel</option>
    </select>
</span>
<br> <br>

    <select class="custom-dropdown__select1" id="type_evenement" >
   
    </select>
</span>

            <input type="submit" name="Valider" value="Réserver">
                          

            </form>
 
        </html>
        </center>
    
    </body>
    
        
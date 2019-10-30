<?php
try{
    $db= new PDO ("mysql:host=127.0.0.1; dbname=expernet","root",""); 
}
catch(Exception $e)
{ echo $e;}
{
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>Ajout d'un plat</title>
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
        <br><br><br><br> <br><br><br><br>
        <center>
        <html lang="fr" dir="ltr">
    
        
            <form class="box" action='creer_plat.php' method="post"><!--post-->
                <!--<script src="js/champs.js"></script>-->
                <!-- <form action="" method="get" onsbmit="return controleChamps(this)">  -->
                <!--champsjs:
               function controlleChamps(){
                    return false;
                }     -->
               
            <input type="text"  name="nom" placeholder="Nom du Plat">
            <input type="text"  name="prix" placeholder="Prix">
            
            <span class="custom-dropdown custom-dropdown--white" id="typePlat" name="typePlat">
    <select class="custom-dropdown__select" name="typePlat" value="" > 
        <option>Type de Plat</option>
        <option>Entrée</option>
        <option>Plat de Résistance</option>
        <option>Plat</option>
        <option>Dessert</option>
        <option>Boisson</option>
    </select>
            </span>
            <br><br>
            <legend><FONT color="white">Veuillez sélectionner les Allergènes </legend></FONT>
            <legend><FONT color="white">obligatoires présents dans le plat :</legend></FONT>
           <br>
            <fieldset>
  
  <div align="left">
  <input type="checkbox" id="Aucun" name="Aucun" value="Aucun">
    <label for="Aucun"><FONT color="white">Aucun</label></FONT>
  <br>
    <input type="checkbox" id="Cereales" name="Cereales" value="Céréales">
    <label for="Cereales"><FONT color="white">Céréales</label></FONT>
  <br>
    <input type="checkbox" id="Crustaces" name="Crustaces" value="Crustacés">
    <label for="Crustaces"><FONT color="white">Crustacés</label></FONT>
    <br>
 
    <input type="checkbox" id="FruitsACoques" name="FruitsACoques" value="Fruits à Coques">
    <label for="FruitsACoques"><FONT color="white">Fruits à coques</label></FONT>
    <br>

    <input type="checkbox" id="Celeri" name="Celeri" value="Céleri">
    <label for="Celeri"><FONT color="white">Céleri</label></FONT>
    <br>

    <input type="checkbox" id="Oeufs" name="Oeufs" value="Oeufs">
    <label for="Oeufs"><FONT color="white">Œufs</label></FONT>
    <br>

    <input type="checkbox" id="Moutarde" name="Moutarde" value="Moutarde">
    <label for="Moutarde"><FONT color="white">Moutarde</label></FONT>
    <br>

    <input type="checkbox" id="Poissons" name="Poissons" value="Poissons">
    <label for="Poissons"><FONT color="white">Poissons</label></FONT>
    <br>

    <input type="checkbox" id="Soja" name="Soja" value="Soja">
    <label for="Soja"><FONT color="white">Soja</label></FONT>
    <br>

    <input type="checkbox" id="Grainesdesesame" name="Grainesdesesame" value="Graines de sésame">
    <label for="Grainesdesesame"><FONT color="white">Graines de sésame</label></FONT>
    <br>

    <input type="checkbox" id="Lupin" name="Lupin" value="Lupin">
    <label for="Lupin"><FONT color="white">Lupin</label></FONT>
    <br>

    <input type="checkbox" id="Arachides" name="Arachides" value="Arachides">
    <label for="Arachides"><FONT color="white">Arachides</label></FONT>
    <br>

    <input type="checkbox" id="Mollusques" name="Mollusques" value="Mollusques">
    <label for="Mollusques"><FONT color="white">Mollusques</label></FONT>
  </div>
 
</fieldset>

            
            <script type="text/javascript">
	function gestionDiv(element){
		var  maDiv = document.getElementById(element);
		var  Indgredients = document.getElementById('ingredients');
		if(maDiv.style.display == "none"){
			maDiv.style.display = "block";
			Ingredients.value ="Masquer";
		}
		else{
			maDiv.style.display = "none";
			ingredient.value ="ingrédient";
		}
	}
</script>


<FORM>
    
<input type="button" value="Ingrédients" onclick="gestionDiv('test')" id="ingredient" />
<TEXTAREA name="ingredients" id="test" rows=4 cols=30 placeholder="Liste des ingrédients" ></TEXTAREA>

            <script type="text/javascript">
	function gestionDiv(element){
		var  marecette = document.getElementById(element);
		var  recette = document.getElementById('Ingredients');
		if(marecette.style.display == "none"){
			marecette.style.display = "block";
			recette.value ="Masquer";
		}
		else{
			marecette.style.display = "none";
			recette.value ="Recette";
		}
	}
</script>


<FORM>
    
<input type="button" value="Recette" onclick="gestionDiv('larecette')" id="recette" />
<TEXTAREA name="recette" id="larecette" rows=4 cols=30 placeholder="Recette" ></TEXTAREA>

            <input type="text" name="fournisseur" id="fournisseur" placeholder="Fournisseur">
            

            <input type="submit" name="Valider" value="Ajout Repas">
                          
 
           
</form>
 
        </html>
        </center>
    
    </body>
    
        
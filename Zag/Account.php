
<?php

//connection a la base de donnee
try{
 $bdd= mysqli_connect('localhost','root','','expernet');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>ACCOUNT</title>
        <link rel="stylesheet" href="css/account.css">
        <link href="css/landing-page.css" rel="stylesheet">
    </head>
    
    <body>
           <center> <body background="img/background.jpg"> </center>
      <meta name="viewport" content="width=device-width"/>
        <!-- Partie de la Navigation -->
        
        <!-- Bandeau d'en tete -->
        <a name="about"></a>
        <div class="intro-header"> 
            <div class="container"> 
                    <div class="col-lg-12">
                        <div style="position: left";class="intro-message">
                            <hr class="intro-divider">
                            <ul class="list-inline intro-social-buttons">
                            </ul>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de l'en-tete -->
    
        <!-- Page -->
        
        <center>
        <html lang="fr" dir="ltr">
    
       
            <form class="box" action='connexion_account.php' method="post" onsubmit="return verifChamps(this)">
                <script src="js/controleChamps.js"></script>
                

                <!-- <form action="" method="get" onsbmit="return controleChamps(this)">  -->
                <!--champsjs:
               function controlleChamps(){
                    return false;
                }     -->
                <h1>Au Bon Port</h1>
                <h2> Crée un compte</h2>

                <div align="center">
            
            <input type="text" name="nom" placeholder="Nom"required>
            <br>
            <input type="text" name="prenom" placeholder="Prenom"required>
            <br>
            <input type="text" name="pseudo" placeholder="Pseudo"required>
            <br>
            <input type="number" name="tel" placeholder="Numero de téléphone"required>
            <br>
            <input type="email" name="mail" placeholder="Mail"required>
            <span  id="msgmail" style="visibility:hidden;"> <FONT color='red'>Format mail incorect</span></FONT>
            
            <input type="password" name="passw" placeholder="Mot de passe"required>
            <input type="password" name="cpassw" placeholder="Confirmer mot de passe"required>
            <span  id="msgmotdepasse" style="visibility:hidden;"> <FONT color='red'>Mot de passe incorect  </span></FONT>
            
            <center>  <label for="date"><FONT color='white'>Date de naissance: &nbsp;</label></center>
            <input type="date" name="date" placeholder="Date De Naissance"required>
            <span  id="msgdate" style="visibility:hidden;"> <FONT color='red'>Date incorect  </span></FONT>
            
            <center><label for="question1">Question secrète :</label></center>
            <select name="question1" id="question1">
                <option value="">Veuiller choisir une option</option>
                <option value="1">Quelle était le nom de votre école primaire</option>
                <option value="2">Quelle est votre équipe sportive favorite</option>
                <option value="3">Quelle est votre ville favorite</option>
                <option value="4">Quelle est votre destination de rêve</option>
                <option value="5">Quelle est votre couleur préféré</option> </select>
                <br>
            <input type="text" name="reponse1" placeholder="Reponse de la question secrete 1"required>
            <br>

            <center><label for="question2">Question secrète :</label><center>
            <select name="question2" id="question2">
                <option value="">Veuiller choisir une option</option>
                <option value="1">Nom de votre premier animal de compagnie</option>
                <option value="2">Quelle est votre lieu de naissance</option>
                <option value="3">Quelle est le nom de jeune fille de votre mère</option>
                <option value="4">Votre aliment préféré</option>
                <option value="5">Quelle est la destination de votre voyage</option> </select>
                <br>
                <input type="text" name="reponse2" placeholder="Reponse de la question secrete 2"required>


            <input type="submit" name="Valider" value="Valider">
            
            <!--<a href="formulaire.php" style="color:white"> Vous n'etes pas encore inscrit? Cliquez ici </a></p>-->
            </div>
           
        
             

        </form>
            
        
        </html>
        </center>
    
    </body>
    
<?php
//connection a la base de donnee
try{
    $db = new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Au Bon Port</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/account.css">
  <link rel="stylesheet" type="text/css" href="css/nav-bar.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div>
            <div align="right">
          <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="accueil.php">Accueil&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="login.php">S'identifier&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="login.php">S'inscrire&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="modification.php">Modification  commandes&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="Reservation.php">Réserver&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="Plat.php">Ajout Plat&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="#event">Notre Carte&nbsp;<img src="img/menu.png"  height="25" width="25"></a>
            <a href="#menu-list">Menu Du Jour&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="contact.php">Contact&nbsp;<img src="img/phone.png"  height="25" width="25"></a>
            <a href="info.php">Infos&nbsp;<img src="img/phone.png"  height="25" width="25"></a>
      <a href="#contact">A Propos&nbsp;<img src="img/search.png"  height="25" width="25"></a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
      </header>

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
            <br>
            <input type="password" name="cpassw" placeholder="Confirmer mot de passe"required>
            <span  id="msgmotdepasse" style="visibility:hidden;"> <FONT color='red'>Mot de passe incorect  </span></FONT>
            
            <center>  <label for="date"><FONT color='white'>Date de naissance: &nbsp;</label></center>
            <input type="date" name="date" placeholder="Date De Naissance"required>
            <span  id="msgdate" style="visibility:hidden;"> <FONT color='red'>Date incorect  </span></FONT>
            
            <center><label for="question1">Question secrète :</label></center>
            <select name="question1" id="question1">
                <option value="">Veuiller choisir une option</option>
                <option value="Quelle était le nom de votre école primaire">Quelle était le nom de votre école primaire</option>
                <option value="Quelle est votre équipe sportive favorite">Quelle est votre équipe sportive favorite</option>
                <option value="Quelle est votre ville favorite">Quelle est votre ville favorite</option>
                <option value="Quelle est votre destination de rêve">Quelle est votre destination de rêve</option>
                <option value="Quelle est votre couleur préféré">Quelle est votre couleur préféré</option> </select>
                <br>
            <input type="text" name="reponse1" placeholder="Reponse de la question secrete 1"required>
            <br>

            <center><label for="question2">Question secrète :</label><center>
            <select name="question2" id="question2">
                <option value="">Veuiller choisir une option</option>
                <option value="Nom de votre premier animal de compagnie">Nom de votre premier animal de compagnie</option>
                <option value="Quelle est votre lieu de naissance">Quelle est votre lieu de naissance</option>
                <option value="Quelle est le nom de jeune fille de votre mère">Quelle est le nom de jeune fille de votre mère</option>
                <option value="Votre aliment préféré">Votre aliment préféré</option>
                <option value="Quelle est la destination de votre voyage">Quelle est la destination de votre voyage</option> </select>
                <br>
                <input type="text" name="reponse2" placeholder="Reponse de la question secrete 2"required>


            <input type="submit" name="Valider" value="Valider">
            
            <!--<a href="formulaire.php" style="color:white"> Vous n'etes pas encore inscrit? Cliquez ici </a></p>-->
            </div>
            </form>
            </html>
        </center>
    
    </body>
    
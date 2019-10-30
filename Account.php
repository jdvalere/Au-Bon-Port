
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
    <script src="js/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/chat.css">
  <link rel="stylesheet" type="text/css" href="css/chat.css">
  <link rel="stylesheet" type="text/css" href="css/button2.css">

  <script src="js/chat.js"></script>
  <link rel="stylesheet" href="loaderx.css"/>
  <script src="js/loader.js"></script>

  <script type="text/javascript">

$(window).on('load',function(){
    $('.preloader').addClass('complete').delay(1000).fadeOut()
    
} )   

</script>


        <title>ACCOUNT</title>
        <link rel="stylesheet" href="css/account.css">
        <link href="css/landing-page.css" rel="stylesheet">
    </head>
    
    <body>
    <div class="preloader">
        <div id="loader" class="ring">Loading</div>
    </div>




  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div>
            <div align="right">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
            session_start();

            if ($_SESSION['username'] !== ""){
                $user = $_SESSION['username'];

            echo "<FONT size=5px color='white'><p style='font-family: serif'>Hey 
                    $user&nbsp;&nbsp;&nbsp;</FONT></p> ";}
                    ?>
            <a href="login.php">Identification&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="login.php">S'enregistrer&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="#event">Notre Carte&nbsp;<img src="img/menu.png"  height="25" width="25"></a>
            <a href="#menu-list">Menu Du Jour&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="contact.php">Contact&nbsp;<img src="img/phone.png"  height="25" width="25"></a>
      <a href="#contact">A Propos&nbsp;<img src="img/search.png"  height="25" width="25"></a>
      <a href='accueil.php?deconnexion=true'><span class=button2>Déconnexion</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
      </header>



<div id="content">

 <!-- tester si l'utilisateur est connecté -->
 <?php
                
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
              
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br><br><br><br><div align='right'> <FONT size=5px color='white'><p style='font-family: serif'>&nbsp;&nbsp;Bonjour 
                    $user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</FONT></p> 
                    <FONT size=5px color='white'><p style='font-family: serif'>vous êtes connectés&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</FONT></p>";

                }
            ?>
            
            
            
           
            
        </div>
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
    
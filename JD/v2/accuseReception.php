<?php
	include 'requete.php';
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
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/chat.css">
  <link rel="stylesheet" type="text/css" href="css/chat.css">
  <link rel="stylesheet" type="text/css" href="css/button2.css">

  <script src="Au-Bon-Port/js/chat.js"></script>
  <!--<link rel="stylesheet" href="Au-Bon-Port/loaderx.css"/>
  <!--<script src="Au-Bon-Port/js/loader.js"></script>-->




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
            <a href="accueil.php">Accueil&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="login.php">Identification&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="login.php">S'enregistrer&nbsp;<img src="img/acceuil.png"  height="25" width="25"></a>
            <a href="#event">Notre Carte&nbsp;<img src="img/menu.png"  height="25" width="25"></a>
            <a href="#menu-list">Menu Du Jour&nbsp;<img src="img/food.png"  height="25" width="25"></a>
            <a href="contact.php">Contact&nbsp;<img src="img/phone.png"  height="25" width="25"></a>
            <a href="info.php">Infos&nbsp;<img src="img/phone.png"  height="25" width="25"></a>
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







      <div id="container" >
        <div class="row">
          <div class="inner text-center">
		  <div align="right"><br><br>
           <h1 class="logo-name"> Au Bon Port &nbsp;&nbsp;&nbsp;   </h1>
            <br>
			<h2>Un des meilleurs restaurant à l'île de la Réunion&nbsp;&nbsp;&nbsp;&nbsp;</h2>
            <p>Dans une ambiance chaleureuse et décontractée plonger au cour de l'île.&nbsp;&nbsp;&nbsp;&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->



    <!-- Contenu de la page -->
    <center>
	<a  name="services"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>                   
                <h2 class="ecrireMessage">Votre requête a bien été prise en compte !</h2>
			</div>
		</div>
	</center>
	<br>
  

  
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Numero De Téléphone</h4>
              <p class="light-blue regular alt-p">+069238997 - <span class="contacts-sp">Numéro accueil</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Heure D'ouverture</h4>
              <p class="light-blue regular alt-p"> Lundi à Vendredi 09.00 H - 00:00 H</p>
              <p class="light-blue regular alt-p">
                Samedi à Dimanche 08:00 H - 16.00 H
              </p>
            </div>
          </div>
        </div>
       <br><br><br><br><br><br><br><br><br>
  <br><br>
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Au Bon Port</h4>
            <address>Zac 2000<br>Au Port</address>
            <p class="copyright clear-float">
              © Au Bon Port. Tout droit réservé
             
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->





  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

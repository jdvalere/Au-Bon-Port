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

  <script src="js/chat.js"></script>
  <link rel="stylesheet" href="loaderx.css"/>
  <script src="js/loader.js"></script>

  <script type="text/javascript">

$(window).on('load',function(){
    $('.preloader').addClass('complete').delay(1000).fadeOut()
    
} )   

</script>


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

  
   

  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Venez passez chez nous une Délicieuse et agréable journée</h1>
          <p class="header-p">Les menus sont toujours travaillés avec des produits de saison. 
            <br>Passionnée par son métier, notre équipe travaille les produits et les cuissons avec la rigueur et toute la créativité héritée d'un savoir-faire parfois oublié. </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Une cuisine avec des produits du marché et de saison :</h2>
              <p>Toujours à la recherche de beaux produits, nous achetons auprès de producteurs locaux de qualité, ce qui nous permet de vous proposer des plats d'une grande finesse.</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Venez découvrir la cuisine du moment, raffinée,  gastronomique moderne mais aussi traditionnelle.</li>
                  <li><i class="fa fa-check"></i>Notre équipe vous accueille dans un cadre contemporain aux teintes chaleureuses. </li>
                  <li><i class="fa fa-check"></i>Le service soigné et attentif fait par de vrais professionnels sait se faire discret pour un repas d'affaire ou un tête à tête.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  
  
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Notre menu du jour est :
            <br>rougail saucisse boucanéé bringelle  </p>
        </div>

        

      </div>
    </div>
  </section>



  <div class="container text-center">
      <div class="round hollow text-center">
      <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Ouvrir le Chat </a>
      </div>
      
      <hr>
      
      
</div>
</div>


<div class="popup-box chat-popup" id="qnimate">
        <div class="popup-head">
      <div class="popup-head-left pull-left"><img src="img/res01.jpg" alt="iamgurdeeposahan"> Zag Castelli</div>
          <div class="popup-head-right pull-right">
          <div class="btn-group">
                    <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                   <i class="glyphicon glyphicon-cog"></i> </button>
                  <ul role="menu" class="dropdown-menu pull-right">
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Block</a></li>
                  <li><a href="#">Clear Chat</a></li>
                  <li><a href="#">Email Chat</a></li>
                  </ul>
          </div>
          
          <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                    </div>
      </div>
    <div class="popup-messages">
      
    
    
    
    <div class="direct-chat-messages">
                  
        
        <div class="chat-box-single-line">
              <abbr class="timestamp">20 Octobre, 2019</abbr>
        </div>
        

        
        <!-- Message. Default to the left -->
                  <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left">Zag Castelli</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="img/res01.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Hey bro, Comment ça va ?
                    </div>
          <div class="direct-chat-info clearfix">
                      <span class="direct-chat-timestamp pull-right">15h36 </span>
                    </div>
          <div class="direct-chat-info clearfix">
          <span class="direct-chat-img-reply-small pull-left">
            
          </span>
          <span class="direct-chat-reply-name">Vue</span>
          </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
        
        
        <div class="chat-box-single-line">
          <abbr class="timestamp">21 Octobre, 2019</abbr>
        </div>
    
        
        
        <!-- Message. Default to the left -->
                  <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name pull-left">Zag</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="iamgurdeeposahan" src="img/res01.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Hey bro, t'es la ?
                    </div>
          <div class="direct-chat-info clearfix">
                      <span class="direct-chat-timestamp pull-right">16h40 </span>
                    </div>
          <div class="direct-chat-info clearfix">
            <img alt="iamgurdeeposahan" src="img/res01.jpg" class="direct-chat-img big-round">
          <span class="direct-chat-reply-name">Zag</span>
          </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
        
        
                  

                  

                </div>
    
    
    
    
    
    
    
    
    
    </div>
    <div class="popup-messages-footer">
    <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
    <div class="btn-footer">
    <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
    <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
          <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
    <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
    </div>
    </div>
  </div>















  
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


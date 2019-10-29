<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>IDENTIFICATION</title>
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
    
        
            <form class="box" action='verification.php' method="post">
                <!--<script src="js/champs.js"></script>-->
                <!-- <form action="" method="get" onsbmit="return controleChamps(this)">  -->
                <!--champsjs:
               function controlleChamps(){
                    return false;
                }     -->
            <h1>S'identifier</h1>

            <label><b><p style="color:white;" style="font-family:impact;">Nom d'utilisateur :</b></label></p>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b><p style="color:white;" style="font-family:impact;">Mot de passe :</b></label></p>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            <!--<a href="formulaire.php" style="color:white"> Vous n'etes pas encore inscrit? Cliquez ici </a></p>-->
            </form>
        
        </html>
        </center>
    
    </body>
    
        
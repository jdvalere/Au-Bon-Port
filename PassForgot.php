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
    
        <title>ACCOUNT</title>
        <link rel="stylesheet" href="css/answer.css">
        <title>Au Bon Port</title>
        <link href="css/landing-page.css" rel="stylesheet">
      </header>
    <body>
            <body background="img/background.jpg"> 
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
            <form class="box" action='answer.php' method="post">
                <h1>Au Bon Port</h1>
                <h2> Mot de passe oublie</h2>
                <div align="center">
                <input type="email" name="mail" placeholder="entrer votre adresse Mail"required>
            <input type="submit" name="Valider" value="Valider">
            </div>
        </form>
        </html>
        </center>
    
    </body>
    
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
  <link rel="stylesheet" type="text/css" href="css/answer.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


           <center> <body background="img/background.jpg"> </center>
      <meta name="viewport" content="width=device-width"/>
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
    
       
            <form class="box" action='login.php' method="post" onsubmit="return verifChampMDP(this)">
                <script src="js/controleChamps.js"></script>
                <h1>Votre mot de passe a bien été modifié</h1>
                <div align="center">
    
            </div>
<?php
$mail = $_POST['mail'];
$passw = $_POST['passw'];
echo "Le mot de passe a été modifier pour l'adresse suivante :".$mail ;
$req = $db->prepare("UPDATE account SET passw=:passw WHERE mail like :mail");
$req->bindParam(':passw', $passw);
$req->bindParam(':mail', $mail);
$req->execute();




?>
<input type="submit" name="Valider" placeholder="Accueil" value="Valider">




        </form>
            
        
        </html>
        </center>
    
    </body>
    
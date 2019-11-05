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
    
       
            <form class="box" action='validationModif.php' method="post" onsubmit="return verifChampMDP(this)">
                <script src="js/controleChamps.js"></script>
                <?php
    $reponse=$_POST['reponseQ1'];
    $recup = $db->prepare('SELECT reponse1 FROM account WHERE mail like :mail');
    $recup->bindParam(':mail', $_POST['mail']);
    $recup->execute();
    $reponsebdd= $recup->fetch();
    $mail = $_POST['mail'];
    if($reponse===$reponsebdd['reponse1']){?>
                <h1>Modifier votre mot de passe</h1>
                <div align="center">
                <input type="password" name="passw" placeholder="entrer votre nouveau mot de passe"required>
                <input type="password" name="cpassw" placeholder="entrer votre nouveau mot de passe"required>
                <input type="hidden" name="mail" value='<?php echo $mail ?>'>
                <span  id="msgmotdepasse" style="visibility:hidden;"> <FONT color='red'>Mot de passe incorect  </span></FONT>
                <input type="submit" name="Valider" value="Valider">
            </div>
        </form>
        </html>
        </center>
    </body>
    <?php  
    $req = $db->prepare("UPDATE account SET passw=:passw WHERE mail like :mail");
    $req->bindParam(':passw', $passw);
            $req->bindParam(':mail', $mail);
            $req->execute();
}
else{
    ?>
  <h1>La réponse que vous avez donnée n'est pas correct ! </h1>
  <input type="button" value="back" onclick="history.go(-1)">
  <?php
}




?>
    
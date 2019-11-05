<?php

//connection a la base de donnee
try{
    $db = new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
try //on regarde si le mail exist deja dans la bdd
{
    $requete= $db->prepare('SELECT mail from account WHERE mail=:mail');
    $requete->bindParam(':mail', $_POST['mail']);
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $requete->execute();
    $resultat=$requete->fetch();
    
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
    </head>
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
       
            <form class="box" action='modifMdp.php' method="post" onsubmit="return verifChampMdp(this)">
                <script src="js/controlePassForgot.js"></script>
                <h1>Au Bon Port</h1>
                <h2> Votre mail est :</h2>
                <div align="center">
                <?php
$mail = $_POST['mail'];
echo "<p>".$mail."</p>";


$recup = $db->prepare('SELECT question1 FROM account WHERE mail like :mail');
$recup->bindParam(':mail', $_POST['mail']);
$recup->execute();
while ($donnees = $recup->fetch()){?>
    <tr>
        <td><?php echo $donnees['question1']?></td>
    </tr> 
<?php }


$recup->closeCursor();

?>
            <input type="text" name="reponseQ1" placeholder="Entrer la reponse a votre question secrete"required>
            <input type="hidden" name="mail" value='<?php echo $mail ?>'>        
            <input type="submit" name="Valider" value="Valider">
        </div>
        </form>
        </html>
        </center>
    </body>

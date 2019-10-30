<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>ACCOUNT</title>
        <link rel="stylesheet" href="css/account.css">
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
        <br> <br><br> <br>





        <?php
//connection a la base de donnee
try{
 $bdd= mysqli_connect('localhost','root','','expernet');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reponse = mysql_query("SELECT expernet FROM account");
        ?>

<table>
<tr>
    <th>id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Tel</th>
    <th>Mail</th>
    <th>Passw</th>
    <th>Status</th>
</tr>
</table>

<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
while($donnees = mysql_fetch_array($reponse))
{
?>
<tr>
    <td><?php echo $donnees['id'];?></td>
    <td><?php echo $donnees['nom'];?></td>
    <td><?php echo $donnees['prenom'];?></td>
    <td><?php echo $donnees['tel'];?></td>
    <td><?php echo $donnees['mail'];?></td>
    <td><?php echo $donnees['passw'];?></td>
    <td><?php echo $donnees['statut'];?></td>
</tr>
<?php
} //fin de la boucle, le tableau contient toute la BDD
mysql_close(); //deconnection de mysql
?>
<table>
</body>
</html>















        